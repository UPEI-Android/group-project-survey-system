<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class SurveyListController extends Controller
{
    public function index (){
        $uid=Auth::user()->id;
        $survey_list = DB::table('surveys')->where('profiles_id',$uid)->get();
        // print_r($survey_list);die;
        return view('survey_list',compact('survey_list'));
    }

    public function detail(Request $request){
        $id=$request->input('id', 0);
        $surveys=DB::table('surveys')->find($id);
        $questions=DB::table('questions')->where('survey_id', $id)->first();
        return view('survey_detail', compact('surveys', 'questions'));
    }
}
