<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Survey;
use App\Models\Question;
use App\Models\Response;
use Symfony\Component\VarDumper\Dumper\ContextProvider\SourceContextProvider;

class SurveyConstruction extends Component
{
   
    public $orderProducts = [];
    public $allProducts = [];
    public $tempOptions = [];
   
    public function mount()
    {
        // $this->allProducts = Product::all();
        $this->questions = [
            ['response_type' => '', 'question_text' => '', 'options' => [['option_id' => '', 'option' => '']]]
        ];
        // $this->tempOptions[] = ['option_id' => '', 'option' => ''];
    }
    public function addOption($index)
    {
        // dd($index);
        $this->questions[$index]['options'][] = ['option_id' => '', 'option' => ''];
    }
    public function addProduct()
    {
        $this->questions[] = ['response_type' => '', 'question_text' => '', 'options' => [['option_id' => '', 'option' => '']]];
        // $this->tempOptions[] = ['option_id' => '', 'option' => ''];
    }
    public function removeOption($index1, $index2)
    {
        unset($this->questions[$index1]['options'][$index2]);
        $this->questions = array_values($this->questions);
    }
    public function removeQuestion($index)
    {
        unset($this->questions[$index]);
        $this->questions = array_values($this->questions);
    }

    public function render()
    {
        info($this->orderProducts);
        return view('livewire.survey-construction');
    }
}
