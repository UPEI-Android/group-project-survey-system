<?php

namespace App\Http\Controllers\Auth;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }
    
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
    
        error_log($request->input('email',''));
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);


        // login code 
        
        if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {
            return back()->with('alert-class', 'Invalid login details');
        }
        
        return redirect()->route('home');
    }
}