<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Http\Request;

class ProfileSettingsController extends Controller
{
    public function index () {
        // if(!Auth::check()){
            // Session::flash('alert-class', 'Invalid login details'); 
        // }
        // dd(Session::all());
        if(!Auth::check()){
            Session::flash('alert', 'User is not authenticated');
            return redirect()->route('login');
        }
        return view('profile_settings');
    }
    public function update(Request $request){
            error_log('here');
        if(!Auth::check()){
            $request->session()->flash('alert', 'User is not authenticated');
            return redirect()->route('login');
        }
        else{   
            $profile = Auth::user();
            $profile->first_name = $request->input('First_Name','');
            $profile->last_name = $request->input('Last_Name','');
            $profile->DOB = $request->input('Date_of_Birth','');
            $profile->phone = $request->input('Phone_Number','');
            $profile->address = $request->input('Address','');
            $profile->update();

        return back();
        }
    }
}
