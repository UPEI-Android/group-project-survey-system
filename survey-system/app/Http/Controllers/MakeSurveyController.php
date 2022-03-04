<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Survey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MakeSurveyController extends Controller
{
    public function index () {
        
        return view('make_survey');
    }



    public function firstStore(Request $request){

        $survey = new Survey;

    
        $survey->name = $request->input('name','abc');
        $survey->profiles_id = $request->input('profiles_id','1');
        $survey->url = $request->input('url','zcx');

       
        $data=$survey->save();
        echo($data);
        if($data){
            echo($data);
            //return redirect()->route('makesurvey');
        }else{
            echo 'error';
        }
    }

    public function store(Request $request){

        $question = new Question;

        // $questions = Question::create([
        //     'id' => '1',
        //     'text'=>'adsds',
        //     'responseType'=>'dsas',
        //     'survey_id'=>'1234'
        // ]);
        // $id = rand(1,100);
        // $question->id = $id;

        // $question->id = $request->input('id','12');
        $question->text = $request->input('text','sdf');
        $question->responseType = $request->input('responseType','cddf');
        $question->survey_id = $request->input('survey_id','123');

        $data = $question->save();
        if($data){
            $request->flash();
            return redirect()->route('mysurvey');

        }else{
            echo('create survey erro');
        }
    }

}
