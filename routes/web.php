<?php

use App\Http\Controllers\CategoryEventController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;
use App\Models\CategoryEvent;
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

Route::get('creer-evenement',[EventController::class,'index'])->middleware('auth');

Route::get('billets',[TicketController::class,'index'])->middleware('auth');

Route::get('connecter',[UserController::class,'login'])->name('login');
Route::get('deconnecter',[UserController::class,'logout'])->name('logout');
Route::get('creer-un-compte',[UserController::class,'signUp']);
Route::post('create-account',[UserController::class,'createAccount'])->name('create.account');
Route::post('login',[UserController::class,'loginForm']);
Route::get('dashboard',[UserController::class,'indexDashboard'])->middleware('auth');

Route::get('categories',[CategoryEventController::class,'categoryDashboard']);
Route::post('categorie',[CategoryEventController::class,'storeCategory']);