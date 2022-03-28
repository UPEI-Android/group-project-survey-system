<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Response;

class MyUrlController extends Controller
{
    public function index2(Request $request, $url)
    {
      
        
    
    $id = DB::table('surveys')->where('url', $url)->value('id');
    $questions=DB::table('questions')->where('survey_id', $id)->get();
   
    $response=DB::table('questions')->where('survey_id', $id)->get();

    $name=DB::table('surveys')->where('url', $url)->value('name');
    
    

    return view('surveyResForm', compact('response', 'questions','name'));
    // return view('survey', [
    //     'questions ' => $questions,
    //     'response' => $response
    // ]);
    
       
    }

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
