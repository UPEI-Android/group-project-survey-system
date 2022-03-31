<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ShareLink extends Controller
{
    



    public function link ($id) 
    {
       
        
     $data = DB::table('surveys')->where('id', $id)->value('url');
        // $data = DB::table('surveys')::find($id);
       
    return view('sharelink', compact('data'));
        // return view('sharelink')->with('url');
        //  return view('user_detail')->with('data', $user_detail);
       
    }


}
