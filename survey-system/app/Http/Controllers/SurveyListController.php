<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Profile;

class SurveyListController extends Controller
{
    public function index (){
        $user = Auth::user();
        $userId = $user->id;
        $allSurveys = DB::table('surveys')->where('profiles_id',$userId)->get();
        return view('survey_list', [
            'user' => $user,
            'allSurveys' => $allSurveys
        ]);
    }

    public function detail(Request $request){
        $id=$request->input('id', 0);
        $surveys=DB::table('surveys')->find($id);
        $questions=DB::table('questions')->where('survey_id', $id)->first();
        return view('survey_detail', compact('surveys', 'questions'));
    }
}
