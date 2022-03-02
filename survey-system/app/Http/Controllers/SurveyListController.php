<?php

namespace App\Http\Controllers;

use App\Models\Survey_list;
use Illuminate\Http\Request;

class SurveyListController extends Controller
{
    public function index (){
//       $Survey_list = new Survey_list;
        $survey = Survey_list::where('user_id', 1)->paginate(6);

//         $survey = Survey_list::where('user_id', 100)->paginate(15);
        return view('survey_list',compact('survey'));

    }

//    public function store(Request $request){
//        $profile = new User;
//        $Survey_list = new Survey_list;
//        $user_data = $profile->where('Email',$request->input('Email',''))->first();
//        if (!empty($user_data)){
//            return redirect()->route('register')->with('alert-class', 'There exists an account with this email!');
//        }
//        else{
//            $Survey_list->problem = $request->input('problem','');
//            $Survey_list->user_id = $user_data;
//
//            if($Survey_list->save()){
//                $request->flashExcept('_token');
//                return redirect()->route('survey-list');
//
//            }else{
//                return redirect()->route('register')->with('alert-class', 'Failed to register!');
//            }
//        }
//
//        return view('survey_list');
//    }
}
