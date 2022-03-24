<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Profile;
use App\Models\Survey;

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
    public function delete($id){
        DB::table('questions')->where('survey_id',$id)->delete();
        DB::table('responses')->where('survey_id',$id)->delete();
        DB::table('surveys')->where('id',$id)->delete();
        return redirect('survey-list'); 
    }

}
