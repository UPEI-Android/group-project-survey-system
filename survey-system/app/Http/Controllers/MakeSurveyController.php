<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Survey;
use Error;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class MakeSurveyController extends Controller
{   
   
    
    public function list ($name) {

        
        $survey = DB::table('surveys')->where('name', $name)->get()->first();;
        $survey_id=$survey->id;
        if(empty($survey_id)){
            $data = Question::all();
        }else{
            $data = Question::where('survey_id',$survey_id)->get();
        }
        return view('list_demo',compact('data'));}
    
    public function index(){
        return view('make_survey');
    }



    public function store(Request $request){ 

        try{
            $survey = new Survey;
            $survey->name = $request->input('surveyName','');
            $numberOfQuestion = $request->input('numberOfQuestion','');
            $profiles_id=Auth::user()->id;
            $survey->profiles_id = $profiles_id;
            $survey->survey_type = 'Normal';
    
            $data1 = $survey->save();
    
    
            for($i=1;$i<=$numberOfQuestion;$i++){
            $question = new Question;
            $tem='text'.(string)$i;
            $tem1='responseType'.(string)$i;
            $question->text = $request->input($tem,'');
            $question->responseType = $request->input($tem1,'');
            $question->survey_id = $survey->id;
            $data2=$question->save();
           
            
            }
        }catch(\Exception $e){
            echo $e->getMessage();
        }
       
        
        
        
    }

}
