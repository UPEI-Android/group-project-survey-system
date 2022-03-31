<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Profile;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index (){
        $date = Carbon::now()->subDays(7);
        $user = Auth::user();
        $userId = $user->id;
        $numRes = 0;
        $allSurveys =DB::table('surveys')->where('profiles_id',$userId)->get();
        $activeCount = DB::table('surveys')->where('profiles_id',$userId)->where('isActive', 1)->get()->count();
        $surveyCount = $allSurveys->count();
        $numRes2= 0; //last 7 days
        for($i = 0 ; $i<$surveyCount;$i++){

            $questionArr = DB::table('questions')->where('survey_id',$allSurveys[$i]->id)->get();
            for($j = 0 ; $j<$questionArr->count();$j++){
                $numRes += DB::table('responses')->where('survey_id',$allSurveys[$i]->id)
                ->where('question_id',$questionArr[$j]->id)->get()->count();
                $numRes2  += DB::table('responses')->where('survey_id',$allSurveys[$i]->id)
                ->where('question_id',$questionArr[$j]->id)->where('created_at','>=', $date)->get()->count();
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
            'responseCount' => $numRes,
            'responsePast7' => $numRes2,
            'activeCount' => $activeCount
        ]);
    }
}

