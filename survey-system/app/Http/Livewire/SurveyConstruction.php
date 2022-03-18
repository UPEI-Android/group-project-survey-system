<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Survey;
use App\Models\Question;
use App\Models\Response;
use Symfony\Component\VarDumper\Dumper\ContextProvider\SourceContextProvider;

class SurveyConstruction extends Component
{
    public $survey_name;
    public $survey_id;
    public $survey_type;
    public $profiles_id;
    public $question_id;
    public $url;
    public $question_text;
    public $answer_type;
    
    public $answer_form;
    public $option=[];

    public $totalQuestions;
    public $currentQuestion=1;
    public $answerType;//this is for local use, other answer_type is for database use

    public $arrayForQuestionText;
    public $arrayForAnswerType;
    public $arrayForAnswerForm;
    public $foo;

    public function mount(){
        $this->answerType='none';
        $this->currentQuestion=1;
        $this->totalQuestions=1;
        $this->foo=true;
    }

    public function render()
    {
        return view('livewire.survey-construction');
    }

    public function increaseQuestion(){
        $this->storeData();
        $this->currentQuestion++;
        $this->totalQuestions++;
        //probably have to store the stuff, make a function to store variables in array
        $this->resetAnswerActive();
        $this->answerType='noneTemp';
    }
    
    
    public function decreaseQuestion(){
        $this->currentQuestion--;
        if($this->currentQuestion <= 1){
            $this->currentQuestion=1;
        }

    }

    public function numericAnswer(){
        $this->answerType='numeric';
        //$this->resetErrorBag();
        //$this->currentQuestion++;
        //$this->totalQuestions++;
    }

    public function textAnswer(){

        $this->answerType='text';
        //$this->currentQuestion++;
        //$this->totalQuestions++;

    }
    public function mcq1Answer(){
        $this->answerType='mcq1';
        //$this->currentQuestion++;
        //$this->totalQuestions++;


    }
    public function mcq2Answer(){
        $this->answerType='mcq2';
        //$this->currentQuestion++;
        //$this->totalQuestions++;


    }

    public function resetAnswerActive(){
        $this->question_text=null;
        $this->answer_type=null;
        $this->answer_form=null;
        //$this->answerType='noneTemp';
    }

    public function resetAnswerFinal(){
        $this->reset();
    }

    public $tempSurveyName;
    public $tempSurveyType;
    
    public function storeData(){
        if($this->foo==true){//just so this goes in only once
            $this->tempSurveyName=$this->survey_name;
            $this->tempSurveyType=$this->survey_type;
            $this->foo=false;
        }
        //Here data will be stored temprarily in an object or array
        $this->arrayForQuestionText=array(
            $this->currentQuestion => $this->question_text//this should keep incrementing, so it'll be each question number and its texts
        );
        $this->arrayForAnswerType=array(
            $this->currentQuestion=>$this->answerType
        );
        $this->arrayForAnswerForm=array(
            $this->currentQuestion=>$this->answer_form
        );
    }

    public $valuesQuestionsTable=array();
    public function submit(){

        $valuesSurveysTable=array(
            "name"=>$this->tempSurveyName,
            "survey_type"=>$this->tempSurveyType,
            //$this->url, This will be needed for generating a url to share the survey
            
        );
        
        
        for($i = 1; $i<$this->totalQuestions; $i++){
            $tempValue=$this->arrayForQuestionText[$i];
            $this->valuesQuestionsTable=array(
                "text"=>$tempValue,
                "responseType"=>$this->answerType,
                
            );
        }

        $valuesResponsesTable=array(
            "response_text"=>$this->answer_form,
            
        );

        Survey::insert($valuesSurveysTable);
        Question::insert($this->valuesQuestionsTable);
        Response::insert($valuesResponsesTable);

        $this->resetAnswerFinal();
        $this->answerType='none';
    }
}
