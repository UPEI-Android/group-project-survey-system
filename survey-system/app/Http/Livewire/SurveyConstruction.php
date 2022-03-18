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
    //public $mcq=[];

    public $totalQuestions;
    public $currentQuestion=1;
    public $answerType;//this is for local use, other answer_type is for database use

    public function mount(){
        $this->answerType='none';//test this shit
        $this->currentQuestion=1;
    }

    public function render()
    {
        return view('livewire.survey-construction');
    }

    public function increaseQuestion(){
        $this->currentQuestion++;
        $this->totalQuestions++;
        //probably have to store the stuff, make a function to store variables in array
        $this->resetAnswerActive();
    }

    public function decreaseQuestion(){
        $this->currentQuestion--;
        if($this->currentQuestion <= 1){
            $this->currentQuestion=1;
        }

    }

    public function numericAnswer(){
        //$this->resetErrorBag();
        $this->answerType='numeric';
        $this->currentQuestion++;
    }

    public function textAnswer(){
        $this->answerType='text';
        $this->currentQuestion++;
        $this->totalQuestions++;

    }
    public function mcq1Answer(){
        $this->answerType='mcq1';
        $this->currentQuestion++;
        $this->totalQuestions++;


    }
    public function mcq2Answer(){
        $this->answerType='mcq2';
        $this->currentQuestion++;
        $this->totalQuestions++;


    }

    public function resetAnswerActive(){
        //$this->storeData();
        $this->reset();
        $this->answerType='noneTemp';

    }

    public function resetAnswerFinal(){
        $this->answerType='none';
    }

    public function storeData(){
        //Here data will be stored temprarily in an object or array
    }

    public function submit(){

        $valuesSurveysTable=array(
            "name"=>$this->survey_name,
            "survey_type"=>$this->survey_type,
            //$this->url, This will be needed for generating a url to share the survey
            
        );

        $valuesQuestionsTable=array(
            "text"=>$this->question_text,
            "responseType"=>$this->answerType,
            
        );

        $valuesResponsesTable=array(
            "response_text"=>$this->answer_form,
            
        );

        Survey::insert($valuesSurveysTable);
        Question::insert($valuesQuestionsTable);
        Response::insert($valuesResponsesTable);

        $this->reset();
        $this->answerType='none';
    }
}
