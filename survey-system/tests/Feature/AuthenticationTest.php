<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AuthenticationTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_login()
    {
        $response = $this->post('/login',[
            'email' => 'testing22122@gmail.com',
            'password' => 'khang1'
        ]);

        $response->assertRedirect('/home');
        $this->assertTrue(Auth::check());
       
    }
    public function test_login_fail(){
        $response = $this->post('/login',[
            'email' => 'testing@gmail.com',
            'password' => 'khang1'
        ]);
        $this->assertFalse(Auth::check());
    }
    public function test_logout()
    {
        $response = $this->get('/logout');

        // $response->assertRedirect('/home');
        $this->assertFalse(Auth::check());

    }
    public function test_register()
    {
        
        $response = $this->post('/register',[
            'Email' => 'testing22@gmail.com',
            'Password' => 'khang1',
            'First_Name' => 'Mary',
            'Last_Name' => 'Doe',
            'Date_of_Birth' => '2001-03-12',
            'Phone_Number' => '9029929999',
            'Address' => '22 ABC Street'
        ]);
       
        $response->assertRedirect('/login');
    }
    public function test_register_fail()
    {
        
        $response = $this->post('/register',[
            'Email' => 'testing22@gmail.com',
            'Password' => 'khang1',
            'First_Name' => 'Mary',
            'Last_Name' => 'Doe',
            'Date_of_Birth' => '2001-03-12',
            'Phone_Number' => '9029929999',
            'Address' => '221 ABC Street'
        ]);
       
        $response->assertRedirect('/register');
    }
    public function test_database_postreg(){
        $this->assertDatabaseHas('profiles', [
            'email' => 'testing22@gmail.com'
        ]);
        $deleted = DB::table('profiles')->where('email', 'testing22@gmail.com')->delete();

    }
}
