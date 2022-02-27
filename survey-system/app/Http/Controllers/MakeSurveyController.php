<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MakeSurveyController extends Controller
{
    public function index () {
        return view('make_survey');
    }
}
