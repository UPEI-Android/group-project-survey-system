<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileSettingsController extends Controller
{
    public function index () {
        return view('profile_settings');
    }
}
