<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Profile;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index (){
        $user = Auth::user();
        $userId = $user->id;
        $numRes = 0;
        $allSurveys = $surveyCount = DB::table('surveys')->where('profiles_id',$userId)->get();
        $surveyCount = $allSurveys->count();
        for($i = 0 ; $i<$surveyCount;$i++){

            $questionArr = DB::table('questions')->where('survey_id',$allSurveys[$i]->id)->get();
            for($j = 0 ; $j<$questionArr->count();$j++){
                $numRes += DB::table('responses')->where('survey_id',$allSurveys[$i]->id)
                ->where('question_id',$questionArr[$j]->id)->get()->count();
                
            }

            // dd($numRes);
        }

        if(!$user){
            Session::flash('alert', 'User is not authenticated');
            return redirect()->route('login');
        }
        // dd($user);

        return view('home', [
            'user' => $user,
            'surveyCount' => $surveyCount,
            'responseCount' => $numRes
        ]);
    }
}

