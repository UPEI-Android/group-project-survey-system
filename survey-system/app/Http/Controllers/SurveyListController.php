<?php

namespace App\Http\Controllers;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use App\Models\Profile;
use App\Models\Survey;
use App\Models\Question;
use App\Models\Response;


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
    public function activateSurvey($id) {
         Survey::where('id',$id)->update(['isActive'=>1]);
         return back();
    }
    public function deactivateSurvey($id) {
        Survey::where('id',$id)->update(['isActive'=>0]);
        return back();
   }
    /**
     * this function creates a csv file of questions and responses of a given survey id.
     * @param id of the survey
     */
    public function exportToCSV($id){

        //joining the question and response table where survey id mathces the param
        $table = Question::join('responses', 'questions.id', '=','responses.question_id')
        ->where('responses.survey_id','=',$id)
        ->get();

        //map
        $filteredRow = Array();

        // keys of the  map
        $arrayHeader = Array();

        foreach($table as $row){
            if(isset($filteredRow[$row['text']])){
                $filteredRow[$row['text']][] = $row['response_text'];
            }else{
                $filteredRow[$row['text']] = Array($row['response_text']);
                $arrayHeader[]=$row['text'];
            }
        }

        $result = Array();
        $count = 0;
        foreach($filteredRow as $row){
            for($i=0;$i<sizeof($row);$i++){
                $result[$i][$count] = $row[$i];
            }
            $count++;
        }


        $filename = public_path("download.csv");
        $file = fopen($filename, 'w+');
        fputcsv($file, $arrayHeader);
        
        foreach($result as $row) {
            fputcsv($file, $row);
            Log::info($row);
        }
        $headers = array(
            'Content-Type' => 'text/csv'
        );

        fclose($file);

       return response()->download($filename, "download.csv", $headers);
    }

}
