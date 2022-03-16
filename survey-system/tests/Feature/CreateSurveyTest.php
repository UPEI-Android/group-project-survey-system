<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CreateSurveyTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    

    public function test_enter_question_example()
    {
        $response = $this->post('/login',[
            'email' => 'profile@gmail.com',
            'numberOfQuestion' => 'khang1'
        ]);

        $response = $this->post('/make-survey',[
            'surveyName' => 'SimpleSuvey',
            'numberOfQuestion' => '2',
            'text1' => 'what is your name1',
            'responseType1' => 'multiple',
            'text2' => 'what is your fav',
            'reponseType2' => 'text'
        ]);
        
        
        $survey = DB::table('surveys')->where('name', 'SimpleSuvey')->get()->first();;
        

        $question = DB::table('questions')->where('text', 'what is your name1')->get()->first();;
        

        $this->assertEquals('what is your name1', $question->text);
        $this->assertEquals('multiple', $question->responseType);

        $question2 = DB::table('questions')->where('text', 'what is your fav')->get()->first();;
        

        $this->assertEquals('what is your fav', $question2->text);
        $this->assertEquals('text', $question2->responseType);
    }


}