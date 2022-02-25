<?php


namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_profile()
    {
         $this->post('/login',[
            'email' => 'testing22122@gmail.com',
            'password' => 'khang1'
        ]);
        $profile = DB::table('profiles')->where('email', 'testing22122@gmail.com')->get()->first();
        $response = $this->post('/profile-settings',[
            'Email' => 'testing22122@gmail.com',
            'First_Name' => 'Mary3',
            'Last_Name' => 'Doe',
            'Date_of_Birth' => '2001-03-12',
            'Phone_Number' => '9029929999',
            'Address' => '22 ABC Street'
        ]);
       $this->assertEquals('Mary3', $profile->first_name);
    }
}
