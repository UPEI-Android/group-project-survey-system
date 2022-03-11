<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_create_survey_example()
    {
        $response = $this->post('/make-survey',[
            'name'=>'testSurvey',
            'profiles_id'=>'1',
            'url'=>'wwww.google.com'
        ]);
        
        
        //$question = DB::table('questions')->where('id', '123456')->get()->first();;
        $this->assertEquals('testSurvey', $survey->name);
        $this->assertEquals('1', $survey->profiles_id);
        $this->assertEquals('www.google.com', $survey->url);
       
    }

    public function test_enter_question_example()
    {
        $response = $this->post('/enter-question',[
            
            'text'=>'123what is your name',
            'responseTyoe'=>'mutipleChoice',
            'survey_id'=>'1'
        ]);
        
        
        $question = DB::table('questions')->where('text', '123what is your name')->get()->first();;

        $this->assertEquals('what is your name', $question->text);
        $this->assertEquals('mutipleChoice', $question->responseType);
        $this->assertEquals('123', $question->survey_id);
    }


}
