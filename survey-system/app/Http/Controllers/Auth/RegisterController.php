<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }
    
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
    
       
        $profile = new User;
        $user_data = $profile->where('Email',$request->input('Email',''))->first();
        if (!empty($user_data)){
            echo '<script>alert("Email already exists");location="'.$_SERVER['HTTP_REFERER'].'"</script>';exit;
        }
        $profile->first_name = $request->input('First_Name','');
        $profile->last_name = $request->input('Last_Name','');
        $profile->email = $request->input('Email','');
        $profile->DOB = $request->input('Date_of_Birth','');
        $profile->phone = $request->input('Phone_Number','');
        $profile->address = $request->input('Address','');
        $profile->password = Hash::make($request->input('Password',''));
        
        if($profile->save()){
            $request->flashExcept('_token','Password');
            echo '<script>alert("Added successfully");location="'.$_SERVER['HTTP_REFERER'].'"</script>';
        }else{
            echo '<script>alert("Failed to add!");location="'.$_SERVER['HTTP_REFERER'].'"</script>';
        }

        auth()->attempt($request->only('email', 'password'));

        // return redirect()->route('dashboard');
    }
}