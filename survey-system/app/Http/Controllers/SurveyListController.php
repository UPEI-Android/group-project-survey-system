<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

use App\Exports\SurveyExport;



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


    public function export(Request $request){
        $id=$request->input('id', 0);


        // 设置表头
        $row = [/* [
            "id"=>'ID',
            "nickname"=>'用户昵称',
            "gender_text"=>'性别',
            "mobile"=>'手机号',
            "addtime"=>'创建时间  '
        ] */];

       //数据
       $list=[
           /*  [
                "id"=>'1',
                "nickname"=>'张三',
                "gender_text"=>'男',
                "mobile"=>'18812345678',
                "addtime"=>'2019-11-21  '
            ],
            [
                "id"=>'2',
                "nickname"=>'李四',
                "gender_text"=>'女',
                "mobile"=>'18812349999',
                "addtime"=>'2019-11-21  '
            ] */
        ];

        // $uid = Auth::user()->id;
        $surveys = DB::table('surveys')->find($id);
        $questions = DB::table('questions')->where('survey_id', $surveys->id)->get();
        $questions=$questions->toArray();
// print_r($questions);die;
        if(!empty($questions)){
            foreach ($questions as $key => $q) {
                $row['q'. $key]= $q->text;

                $responses= collect(DB::table('responses')->where('question_id', $q->id)->where('survey_id', $surveys->id)->first());

                $list['q' . $key] = $responses->toArray()['option'];
            }
        }
        
        $rows[]=$row;
        $lists[]= $list;

        // print_r($responses);
       /*  print_r($rows);
        print_r($lists);
        die; */
        
        // dd(new SurveyExport($row, $list));

        //执行导出
        return Excel::download(new SurveyExport($rows, $lists), date('Y:m:d ') . 'Survey.xls');

    }
}
