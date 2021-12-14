<?php

namespace App\Http\Controllers\client;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthClientController extends Controller
{
    public function login(REQUEST $request)
    {
        return $request;
    }


    public function register(REQUEST $request)
    {

        $this->valiidate($request,[
            'username'=>"required|unique:users",
        ]);

        User::create([
            'nom' => request('nom'),
            'prenom' => request('prenom'),
            'username' => request('tel'),
            'password' => request('password'),
        ]);


        return redirect()->route('home');
        
        return $request;

    }
}
