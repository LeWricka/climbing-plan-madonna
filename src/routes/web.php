<?php

use App\Controllers\Calendar\CalendarController;
use App\Controllers\DailySchedule\DailyScheduleController;
use App\Controllers\Session\UserController;
use App\Controllers\Routine\RoutineController;
use Illuminate\Support\Facades\Route;
use App\Controllers\Account\myAccountController;
use App\Http\Controllers\Auth\ForgotPasswordController;
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

Auth::routes();


Route::get('/', CalendarController::class)->name('calendar');
Route::get('/users', UserController::class);
Route::get('/myAccount', myAccountController::class);
Route::get('/forgotPassword', ForgotPasswordController::class);

Route::post('login/{provider}/callback', 'Auth\LoginController@handleCallback');
Route::get('/dailySchedule/{date}', DailyScheduleController::class);
Route::get('/routine/{id}', RoutineController::class);
