<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Survey;
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


    /*
    public function firstStore(Request $request){

        $survey = new Survey;

    
        $survey->name = $request->input('name','asd');
        $survey->profiles_id = $request->input('profiles_id','21');
        $survey->url = $request->input('url','zcx');

       
        $data=$survey->save();
        //echo($data);
        if($data){
            echo($survey);
            //return redirect()->route('makesurvey');
        }else{
            echo 'error';
        }
    }*/
    
   
    /*
    public function adds_store(Request $request){ 
        $value=$request->input('sub','');
        
        $question = new Question;
        
        $question->text = $request->input('text','');
        $question->responseType = $request->input('responseType','');
        $name=$request->input('name','');
        
        $name=str_replace(['”',"“"], "", $name);
        //$newname = str_replace('"', '', (string)$name);
        
        $survey = DB::table('surveys')->where('name', $name)->get()->first();;
        

        //dd($survey_id);
        $question->survey_id =$survey->id;
        
        $data = $question->save();
        if($data){
            $request->flash();
            if($value=='Next'){
                
                return view('add',compact('name'));
             }
             else{
                 
                //return view('lis_demo',compact('name'));
                return $this->list($name);
             }

        }else{
            echo('create survey erro');
        }
    }*/

    public function store(Request $request){ 
        $survey = new Survey;
       
        

        $survey->name = $request->input('surveyName','');
        $numberOfQuestion = $request->input('numberOfQuestion','');
        $profiles_id=Auth::id();
        $survey->profiles_id = $profiles_id;
        //dd($user);
        $data1=$survey->save();


        for($i=1;$i<=$numberOfQuestion;$i++){
        $question = new Question;
        $tem='text'.(string)$i;
        $tem1='responseType'.(string)$i;
        $question->text = $request->input($tem,'');
        $question->responseType = $request->input($tem1,'');
        $question->survey_id = $survey->id;
        $data2=$question->save();
       
        if(!data2){
            echo('save survey erro.');
        }
        }
        
        //$name=$request->input('name','');

        
        //dd($name);
        
        //$survey_id=$survey->id;
        

        //$question->survey_id = $request->input('survey_id','123');
        
        //$data2= $question->save();
        //dd($question);
        if($data1&&$data2){
            $request->flash();
           
             

                
                echo($survey);
                echo($question);
                // return redirect()->route('makesurvey2');
            
                //return view('lis_demo',compact('name'));
                //return $this->list($name);
             
             

        }else{
            echo('create survey erro');
        }
    }

}
