<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Survey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class MakeSurveyController extends Controller
{   
   
    
    public function list ($name) {

        //传过来的参数
        //$name=$request->input('name','');
        $survey = DB::table('surveys')->where('name', $name)->get()->first();;
        $survey_id=$survey->id;
        if(empty($survey_id)){
            $data = Question::all();
        }else{
            $data = Question::where('survey_id',$survey_id)->get();
        }
        return view('list_demo',compact('data'));//不是这个功能 你晚上有空吗 我先弄好 ok有的 OK 我弄好再问你
    }
    
    public function index(){
        return view('make_survey');
    }


    /*
    public function firstStore(Request $request){

        $survey = new Survey;

    
        $survey->name = $request->input('name','asd');
        $survey->profiles_id = $request->input('profiles_id','21');
        $survey->url = $request->input('url','zcx');

       
        $data=$survey->save();
        //echo($data);
        if($data){
            echo($survey);
            //return redirect()->route('makesurvey');
        }else{
            echo 'error';
        }
    }*/
    
    public function add(){
        return view('add');
    }

    public function adds_store(Request $request){ 
        $value=$request->input('sub','');
        $question = new Question;
        
        $question->text = $request->input('text','');
        $question->responseType = $request->input('responseType','');
        $name=$request->input('name','');
        
        $name=str_replace(['”',"“"], "", $name);
        //$newname = str_replace('"', '', (string)$name);
        
        $survey = DB::table('surveys')->where('name', $name)->get()->first();;
        $question->survey_id = $survey->id;

        //dd($survey_id);
        //$question->survey_id =$survey->id;
        
        $data = $question->save();
        if($data){
            $request->flash();
            if($value=='Next'){
                
                return view('add',compact('name'));
             }
             else{
                 
                //return view('lis_demo',compact('name'));
                return $this->list($name);
             }

        }else{
            echo('create survey erro');
        }
    }

    public function store(Request $request){ 
        $value=$request->input('sub','');
        $question = new Question;
        
        
        $question->text = $request->input('text','');
        $question->responseType = $request->input('responseType','');

        $name=$request->input('name','');

        
        //dd($name);
        $survey = DB::table('surveys')->where('name', $name)->get()->first();;
       
        $question->survey_id = $survey->id;
        //$survey_id=$survey->id;
        

        //$question->survey_id = $request->input('survey_id','123');
        
        $data = $question->save();
        if($data){
            $request->flash();
            //echo($question);
           // return view('btn');//可以了，这里 如果我要两个按钮 跳到不同页面呢 ，什么意思
            // 就一个按钮是下一页 一个按钮是完成 就跟我发你的那个照片一样 按下一页就继续填问题 按完成就生成url。
            // 你现在这里需要做的就是返回到页面上去，你在那个页面上写2个按钮就可以了。写2个a 那标
            //那标签不是都是一样的动作吗 action 
             if($value=='Next'){

                
                return view('add',compact('name'));
                // return redirect()->route('makesurvey2');
             }
             else{
                //return view('lis_demo',compact('name'));
                return $this->list($name);
             }
             

        }else{
            echo('create survey erro');
        }
    }

}
