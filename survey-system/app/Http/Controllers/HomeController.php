<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Profile;
class HomeController extends Controller
{
    public function index (){
        $id = Auth::user()->id;
        $users = Profile::where('id',$id)->get();
        return view('home',['users'=>$users]);
    }
}

