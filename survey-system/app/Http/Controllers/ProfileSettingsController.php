<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileSettingsController extends Controller
{
    public function profile_settings () {
        return view('profile_settings');
    }
}
