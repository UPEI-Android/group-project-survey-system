<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Response;
/**
  * This function creates queries from models. 
  * This gets the url and pulls the repective questions associated the a particular survey and a URl.
  */
class MyUrlController extends Controller
{



    public function index2(Request $request, $url)
    {
      
        
    

    $id = DB::table('surveys')->where('url', $url)->value('id');// query the survey table with url and stores the respective url


    $questions=DB::table('questions')->where('survey_id', $id)->get(); // gets the questions on the basis of earlier stored survey id.
   
    $response=DB::table('questions')->where('survey_id', $id)->get(); //  gets the reponse type of the selected question.
    
    $activation=DB::table('surveys')->where('url', $url)->value('isActive'); // checks wheateher the survey with specific url isActive
    
    
    
    $name=DB::table('surveys')->where('url', $url)->value('name');// it stores the name of the survey associated with the url requested.
    
    
    if($activation==1)
    {
       // it returns a view carrying all questions, reponses and name if survey is active
    return view('surveyResForm', compact('response', 'questions','name'));

    }
    else
    {
       // not active survey has a different view showing a message.

        return view('inactiveSurvey');
    }
    
    
       
    }
    /**
  * This function stores  the reponses and shows a success message.
  */

    public function store(Request $request)
    {
        foreach($request->input() as $key => $value){
            if(str_contains($key, 'answer')){
                $questionId = explode("-",$key)[1];
                $response = new Response;
                $response->question_id = $questionId;
                $response->survey_id =$request->input('Survey_id','');
                $response->response_text = $value;
                $response->save();
            }
        }
        return redirect()->to('success');;

       
    }


}
