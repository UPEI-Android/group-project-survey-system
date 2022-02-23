<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index (){
        return view('home');
    }



    public function logout(){
        \Session::flush();
        \Auth::logout();
        return redirect('');


}
}
