<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\client\ClientController;
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


##############################################################################

/**Pages client */ 

Route::view('login', 'client.pages.login')->name('login');

Route::post('login',[AuthClientController::class,'login']);


Route::view('register', 'client.pages.register');

Route::post('register', [AuthClientController::class,'register']);


Route::get('logout',function(){
    Auth::logout();
    return redirect()->route('home');
});



//Les commandes faites par le client
Route::get('vos-commandes',[ClientController::class,'liste_commandes']);




//Profil client
Route::get('votre-profile',[ClientController::class,'profil']);



//Contact page
Route::view('nous-contacter','client.pages.contact');





################################################################################

/** Administration --- Compte Professionnel */


//Se connecter
Route::view('compte-professionel-connexion', 'admin.pages.login');


//S'enregistrer
Route::view('compte-professionel-inscription', 'admin.pages.register');


