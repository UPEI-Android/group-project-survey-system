<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileSettingsController extends Controller
{
    public function index () {
        // if(!Auth::check()){
            // Session::flash('alert-class', 'Invalid login details'); 
        // }
        // dd(Session::all());
        $user = Auth::user();
        if(!$user){
            Session::flash('alert', 'User is not authenticated');
            return redirect()->route('login');
        }
        // dd($user);
        return view('profile_settings', [
            'user' => $user
        ]);
    }
   
    public function update(Request $request){
        if(!Auth::check()){
            $request->session()->flash('alert', 'User is not authenticated');
            return redirect()->route('login');
        }
        else{   

            $profile = Auth::user();
            if($profile->first_name == $request->input('First_Name','') && $profile->last_name == $request->input('Last_Name','') 
            && $profile->DOB == $request->input('Date_of_Birth','') && $profile->phone == $request->input('Phone_Number','') 
            && $profile->address && $request->input('Address','')){
                return back()->withErrors(['No changes were made']);
            }
            $profile->first_name = $request->input('First_Name','');
            $profile->last_name = $request->input('Last_Name','');
            $profile->DOB = $request->input('Date_of_Birth','');
            $profile->phone = $request->input('Phone_Number','');
            $profile->address = $request->input('Address','');
            // dd($request->input('Address',''));
            $profile->update();
        return back()->with('message', 'You have successfully updated your profile!');
        } 
    }
    public function changePassword(Request $request){
        // error_log('heredasdasdew');

        if(!Auth::check()){
            $request->session()->flash('alert', 'User is not authenticated');
            error_log('it is not authenticated');
            return redirect()->route('login');
            
        }
        try{

            $currentPass = $request->input('currentPassword','');
            $newPass = $request->input('newPassword','');
            $confirmPass = $request->input('confirmPassword','');
            $profile = Auth::user();
            error_log($newPass);
            $check = Hash::check($currentPass, $profile->password);
            // error($check);
            if(Hash::check($currentPass, $profile->password)){
                if($newPass == $confirmPass){
                    $profile->password = Hash::make($newPass);
                    $profile->save();
                    return back()->with('message', 'You have successfully changed you password!');

                }
                else{

                    return back()->withErrors(['Your new password don\'t match, please try again.']);
                }
            }
            else{
                // dd('wrong');
                return back()->withErrors(['Your current password is wrong, try again.']);
            }
        } catch (Throwable $e) {
            report($e);

            return back()->with('err', 'Update password faild, please try again later.');
        }
        error_log('it is in side213133');

    }
}
