<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Question;
use App\Models\Response;
class TemplateController extends Controller
{
    public function index () {
        return view('welcome');
    }
    public function showQuestions($id) {
        $questions = Question::with('responses')->where('questions.survey_id',$id)->get();
        return view('template', compact('questions'));
    }
}
