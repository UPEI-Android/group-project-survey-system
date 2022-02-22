<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TempController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SurveyListController;
use App\Http\Controllers\MakeSurveyController;
use App\Http\Controllers\ProfileSettingsController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
});



Route::get('/home', [HomeController::class, 'home'])->name('home.home');
Route::get('/survey_list', [SurveyListController::class, 'survey_list'])->name('surveylist.survey_list');

Route::get('/template', [TemplateController::class, 'template'])->name('template.template');

Route::get('/make_survey', [MakeSurveyController::class, 'make_survey'])->name('makesurvey.make_survey');
Route::get('/profile_settings', [ProfileSettingsController::class, 'profile_settings'])->name('profilesettings.profile_settings');
