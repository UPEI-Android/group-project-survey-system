<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SurveyListController extends Controller
{
        public function index (){

            //       $Survey_list = new Survey_list;
                    $survey = Survey_list::where('user_id', 100)->paginate(15);
                    return view('survey_list',compact('survey'));
            
        }
}
