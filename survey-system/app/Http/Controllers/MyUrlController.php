<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MyUrlController extends Controller
{
    public function index2(Request $request, $url)
    {
      
        
    
    $id = DB::table('surveys')->where('url', $url)->value('id');
    $questions=DB::table('questions')->where('survey_id', $id)->get('text');
    $response=DB::table('questions')->where('survey_id', $id)->get('responseType');
    
    return view('survey', compact('response', 'questions'));
    // return view('survey', [
    //     'questions ' => $questions,
    //     'response' => $response
    // ]);
    
       
    }
}
