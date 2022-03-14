<?php


namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_profile()
    {
        $response = $this->post('/register',[
            'Email' => 'profile@gmail.com',
            'Password' => 'khang1',
            'First_Name' => 'Mary1',
            'Last_Name' => 'Doe',
            'Date_of_Birth' => '2001-03-12',
            'Phone_Number' => '9029929999',
            'Address' => '22 ABC Street'
        ]);
        $response = $this->post('/login',[
            'email' => 'profile@gmail.com',
            'password' => 'khang1'
        ]);
        $response = $this->post('/profile-settings',[
            'First_Name' => 'New',
            'Last_Name' => 'Doe',
            'Date_of_Birth' => '2001-03-12',
            'Phone_Number' => '9029929999',
            'Address' => '22 ABC Street'
        ]);
        $profile = DB::table('profiles')->where('email', 'profile@gmail.com')->get()->first();

       $this->assertEquals('New', $profile->first_name);

    }
    public function test_profile_fail()
    {
        $response = $this->get('/logout');
        $response = $this->post('/profile-settings',[
            'First_Name' => 'New',
            'Last_Name' => 'Doe',
            'Date_of_Birth' => '2001-03-12',
            'Phone_Number' => '9029929999',
            'Address' => '22 ABC Street'
        ]);
        $response->assertRedirect('/login');
    }
    public function test_password_change()
    {
        $response = $this->post('/login',[
            'email' => 'profile@gmail.com',
            'password' => 'khang1'
        ]);
        // $response = $this->get('/logout');

        $response = $this->post('/profile-settings/changePassword',[
            'currentPassword' => 'khang1',
            'newPassword' => 'khang2',
            'confirmPassword' => 'khang2',
        ]);
        $profile = DB::table('profiles')->where('email', 'profile@gmail.com')->get()->first();
        // $response->assertRedirect('/login');
        $this->assertTrue(Hash::check('khang2', $profile->password));
        $response = $this->post('/profile-settings/changePassword',[
            'currentPassword' => 'khang2',
            'newPassword' => 'khang1',
            'confirmPassword' => 'khang1',
        ]);
    }
}
