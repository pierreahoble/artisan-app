<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function liste_commandes(REQUEST $request)
    {
       return view('client.pages.commandes');
    }



    public function profil()
    {
        return view('client.pages.profil');
    }
}
