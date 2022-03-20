<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Survey;
class MakeSurveyController extends Controller
{
    public function index () {
        return view('make_survey');
    }
    public function update(Request $request){
        // dd($request->input());
        try{
            $survey = new Survey;
            $survey->name = $request->input('survey_name','');
            $survey->survey_type = $request->input('survey_type','');
            $numberOfQuestion = count($request->input('questions',''));
            $profiles_id=Auth::user()->id;
            $survey->profiles_id = $profiles_id;
            $questions = $request->input('questions','');
            // dd($survey,$questions);
            // dd($numberOfQuestion);
            $data1 = $survey->save();


            foreach($questions as $item){
                $optionsText = "";
            $question = new Question;
                if($item['response_type'] == 'mcq'){
                    foreach($item['options'] as $option){
                        error_log($option['option']);
                        $optionsText .= $option['option'].",";
                    }
                    $optionsText = rtrim($optionsText, ", ");
                    $question->options = $optionsText;
                }
               
            $question->text = $item['question_text'];
            $question->responseType = $item['response_type'];
            $question->survey_id = $survey->id;
            $data2=$question->save();


            }
        }catch(\Exception $e){
            echo $e->getMessage();
        }
      }
}
