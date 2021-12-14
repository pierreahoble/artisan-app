<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\client\AuthClientController;

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

Route::view('/','welcome')->name('home');

//Se connecter 

Route::view('login', 'client.pages.login');

Route::post('login',[AuthClientController::class,'login']);


Route::view('register', 'client.pages.register');

Route::post('register', [AuthClientController::class,'register']);
