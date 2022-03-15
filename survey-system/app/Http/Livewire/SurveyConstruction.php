<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Survey;

class SurveyConstruction extends Component
{
    public $survey_name;
    public $survey_id;
    public $survey_type;
    public $profiles_id;
    public $url;
    public $question_text;
    public $answer_type;
    
    public $answer_form;
    //public $mcq=[];

    public $totalSteps;
    public $currentStep=1;
    public $answerType;//this is for local use, other answer_type is for database use

    public function mount(){
        $this->answerType='none';//test this shit
        $this->currentStep=1;
    }

    public function render()
    {
        return view('livewire.survey-construction');
    }

    public function increaseStep(){
        $this->currentStep++;
    }

    public function decreaseStep(){
        $this->currentStep--;
        if($this->currentStep <= 1){
            $this->currentStep=1;
        }

    }

    public function numericAnswer(){
        $this->answerType='numeric';
        $this->currentStep++;

    }
    public function textAnswer(){
        $this->answerType='text';
        $this->currentStep++;

    }
    public function mcq1Answer(){
        $this->answerType='mcq1';
        $this->currentStep++;

    }
    public function mcq2Answer(){
        $this->answerType='mcq2';
        $this->currentStep++;

    }

    public function resetAnswer(){
        $this->answerType='none';
        $this->currentStep++;

    }
}
