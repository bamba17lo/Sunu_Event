<?php

use App\Http\Controllers\CategoryEventController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('musique&culture',[CategoryEventController::class,'categoryMusic']);
Route::get('sport',[CategoryEventController::class,'categorySport']);
Route::get('mode&beaute',[CategoryEventController::class,'categoryMode']);
Route::get('education&formation',[CategoryEventController::class,'categoryEducation']);
Route::get('seminaire&conference',[CategoryEventController::class,'categoryConference']);

