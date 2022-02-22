<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SurveyListController extends Controller
{
    public function index (){
        return view('survey_list');
    }
}
