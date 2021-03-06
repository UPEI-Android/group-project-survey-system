<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SurveyListController;
use App\Http\Controllers\MakeSurveyController;
use App\Http\Controllers\ProfileSettingsController;

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SurveyConsController;
use App\Http\Livewire\SurveyConstruction;
use App\Http\Controllers\MyUrlController;
use App\Http\Controllers\ShareLink;
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
    return view('layouts.app');
});




Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/survey-list', [SurveyListController::class, 'index'])->name('surveylist');
Route::get('/export/{id}', [SurveyListController::class, 'exportToCSV'])->name('export');
Route::get('delete/{id}','App\Http\Controllers\SurveyListController@delete');
Route::get('activateSurvey/{id}','App\Http\Controllers\SurveyListController@activateSurvey');
Route::get('deactivateSurvey/{id}','App\Http\Controllers\SurveyListController@deactivateSurvey');

Route::get('/template', [TemplateController::class, 'index'])->name('template');
// Route::get('/template/{id}','App\Http\Controllers\TemplateController@showQuestions');
Route::get('/responses/{id}','App\Http\Controllers\ResponseController@showQuestions');

Route::get('/make-survey', [MakeSurveyController::class, 'index'])->name('makesurvey');
Route::post('/make-survey', [MakeSurveyController::class, 'update'])->name('makesurvey');

Route::get('/profile-settings', [ProfileSettingsController::class, 'index'])->name('profilesettings');
Route::post('/profile-settings', [ProfileSettingsController::class, 'update'])->name('profilesettings');
Route::post('/profile-settings/changePassword', [ProfileSettingsController::class, 'changePassword'])->name('changePassword');
// Route::get('/profile-settings/{id}', [ProfileSettingsController::class, 'index2'])->name('profilesettings');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);
Route::post('/store', [SurveyConsController::class, 'update'])->name('addSurvey');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get("/testing", SurveyConstruction::class);
Route::view('/survey', 'survey')->name('survey');
Route::view('/success', 'success')->name('success');

Route::get('/logout',[LogoutController::class,'index'])->name('logout');

Route::get('/surveyRespond/{url}',[MyUrlController::class,'index2']);
 Route::get('/surveys',[MyUrlController::class,'index2']);

 Route::post('/submit',[MyUrlController::class,'store'])->name('submission');;
 
 Route::get('/sharelink/{id}', [ShareLink::class,'link']);
 Route::post('/submit',[MyUrlController::class,'store'])->name('submission');
 