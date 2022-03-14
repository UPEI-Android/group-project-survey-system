<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MultiStepForm extends Component
{
    
    protected $numberOfQuestions = 1;
    public $currentStep = 0;//options to choose from in terms of questions
    public $answerChoice=0;//1 will be numeric, 2 will be text, 3 will be mcq1, 4 will be mcq2
    
    
    public $survey_name;
    protected $question_text;
    protected $answer_form;


    public function render()
    {
        return view('livewire.multi-step-form');
    }

    public function mount(){
        $this->numberOfQuestions=1;
        $this->currentStep=0;
    }

    public function numericAnswer(){//first choice will be numeric answer, number
        //of questions will increase with every answer added
        //$this->resetErrorBag();
        $this->numberOfQuestions++;
        $this->answerChoice=1;
        //dd("In Numeric Answer");


    }
    public function textAnswer(){//second choice will be text answer
        $this->resetErrorBag();
        $this->answerChoice=2;
        $this->numberOfQuestions++;


    }
    public function mcq1Answer(){//third choice will be mcq with only 1 choice answer
        $this->resetErrorBag();
        $this->answerChoice=3;
        $this->numberOfQuestions++;


    }
    public function mcq2Answer(){//forth choice will be mcq with more than 1 answer answer
        $this->resetErrorBag();
        $this->answerChoice=4;
        $this->numberOfQuestions++;


    }

    public function increaseStep(){//method called when you hit next, similar method needed to 
        //add number of questions when a user needs to add an extra question or some shit
        $this->resetErrorBag();
        //$this->validateData();
        $this->currentStep++;
        dd("In the increase Step method");
        
    }

    public function decreaseStep(){//method called when you hit previous. Copy exact method
        $this->currentStep--;
        if($this->currentStep < 1){
            $this->currentStep=1;
        }

    }
}
