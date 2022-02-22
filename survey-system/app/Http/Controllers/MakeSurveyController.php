<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MakeSurveyController extends Controller
{
    public function make_survey () {
        return view('make_survey');
    }
}
