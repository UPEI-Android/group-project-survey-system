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

Route::get('/template', [TemplateController::class, 'index'])->name('template');

Route::get('/make-survey', [MakeSurveyController::class, 'index'])->name('makesurvey');
Route::post('/make-survey', [MakeSurveyController::class, 'firststore']);
Route::get('/enter-question', [MakeSurveyController::class, 'index'])->name('enterquestion');
Route::post('/enter-question', [MakeSurveyController::class, 'store']);


Route::get('/profile-settings', [ProfileSettingsController::class, 'index'])->name('profilesettings');
Route::post('/profile-settings', [ProfileSettingsController::class, 'update'])->name('profilesettings');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/logout',[LogoutController::class,'index'])->name('logout');

