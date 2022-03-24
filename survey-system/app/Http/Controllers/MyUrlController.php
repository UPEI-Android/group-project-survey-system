<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MyUrlController extends Controller
{
    public function index2(Request $request, $url)
    {
      
        
    
    $id = DB::table('surveys')->where('url', $url)->value('id');
    $questions=DB::table('questions')->where('survey_id', $id)->get();
   
    $response=DB::table('questions')->where('survey_id', $id)->get();

    $name=DB::table('surveys')->where('url', $url)->value('name');
    
    

    return view('surveys', compact('response', 'questions','name'));
    // return view('survey', [
    //     'questions ' => $questions,
    //     'response' => $response
    // ]);
    
       
    }

    public function store(Request $request)
    {
     return $request->input();

       
    }


}
