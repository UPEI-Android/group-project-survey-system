<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LogoutController extends Controller
{
    public function index()
    {
<<<<<<< ML-Changes-to-DB
        Session::flush();
        Auth::logout();
=======
        \Session::flush();
        \Auth::logout();
>>>>>>> dev
        return redirect('/');
    }

   
}