<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TempController extends Controller
{
    public function testing () {
        return view('welcome');
    }

    public function home (){
        return view('home');
    }

    public function survey_list (){
        return view('survey_list');
    }

    public function template () {
        return view('template');
    }

    public function make_survey () {
        return view('make_survey');
    }

    public function profile_settings () {
        return view('profile_settings');
    }
}
