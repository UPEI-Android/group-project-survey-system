<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TempController;
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



Route::get('/home', [TempController::class, 'home'])->name('temp.home');
Route::get('/survey_list', [TempController::class, 'survey_list'])->name('temp.survey_list');
Route::get('/template', [TempController::class, 'template'])->name('temp.template');
Route::get('/make_survey', [TempController::class, 'make_survey'])->name('temp.make_survey');
Route::get('/profile_settings', [TempController::class, 'profile_settings'])->name('temp.profile_settings');
