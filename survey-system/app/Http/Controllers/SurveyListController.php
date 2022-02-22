<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SurveyListController extends Controller
{
    public function survey_list (){
        return view('survey_list');
    }
}
