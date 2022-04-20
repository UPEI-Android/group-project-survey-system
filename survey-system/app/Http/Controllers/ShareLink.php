<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
/**
  * This function simply return the survey associated with the requested survey id.
  */
class ShareLink extends Controller
{
    



    public function link ($id) 
    {
       
        
     $data = DB::table('surveys')->where('id', $id)->value('url');// gets the survey url belonging to a specific survey id.
       
       
    return view('sharelink', compact('data'));
       
    }


}
