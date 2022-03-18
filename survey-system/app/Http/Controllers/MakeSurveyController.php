<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MakeSurveyController extends Controller
{
    public function index () {
        
        $variable = '';
        return view('make_survey', compact('variable'));
    }
}
