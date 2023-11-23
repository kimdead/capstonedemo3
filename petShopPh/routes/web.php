<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServerController;

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


Route::get('/',[ServerController::class, 'index']);
Route::view("/contact", "contact");

// store service data
Route::post('/services',[ServerController::class, 'store']);

// services//////////
Route::get('/services/boarding',[ServerController::class, 'boarding']);

Route::get('/services/daycare',[ServerController::class, 'daycare']);

Route::get('/services/grooming',[ServerController::class, 'grooming']);

Route::get('/services/petwalking',[ServerController::class, 'petwalking']);

Route::get('/services/sitting',[ServerController::class, 'sitting']);

Route::get('/services/training',[ServerController::class, 'training']);


    // register
Route::get('/signup',[UserController::class, 'create']);


//create new user
Route::post('/users',[UserController::class, 'store']);