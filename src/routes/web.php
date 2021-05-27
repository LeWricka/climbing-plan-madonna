<?php

use App\Controllers\Calendar\CalendarController;
use App\Controllers\DailySchedule\DailyScheduleController;
use App\Controllers\Session\UserController;
use Illuminate\Support\Facades\Route;
use App\Controllers\Account\myAccountController;

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
Route::get('/users', UserController::class);
Route::get('/myAccount', myAccountController::class);
Route::get('/dailySchedule/{date}', DailyScheduleController::class);
//Route::middleware(['auth' ])->group(function () {
    Route::get('/', CalendarController::class)->name('calendar');;
//});
