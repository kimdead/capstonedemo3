<?php

use App\Http\Controllers\ServerController;
use Illuminate\Http\Request;
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


Route::get('/',[ServerController::class, 'index']);

Route::get('/services/boarding',[ServerController::class, 'boarding']);

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/daycare', function () {
    return view('daycare');
});
Route::get('/grooming', function () {
    return view('grooming');
});
Route::get('/sitting', function () {
    return view('sitting');
});
Route::get('/petwalking', function () {
    return view('petwalking');
});
Route::get('/training', function () {
    return view('training');
});

Route::get('/signup', function () {
    return view('signup');
});
