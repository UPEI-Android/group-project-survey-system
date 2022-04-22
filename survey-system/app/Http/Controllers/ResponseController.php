<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Question;
use App\Models\Response;
/**
 * This function creates queries from models. 
 * This gets all the questions contained in a survey, and all the user answers contained in each question.
 */
class ResponseController extends Controller
{
    
    public function showQuestions($id) {
        $questions = Question::with('responses')->where('questions.survey_id',$id)->get();
        return view('response',[
            'questions' => $questions,
            'survey_id' => $id
        ]);
    }
}
