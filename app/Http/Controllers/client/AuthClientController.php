<?php

namespace App\Http\Controllers\client;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthClientController extends Controller
{
    public function login(REQUEST $request)
    {
        $username = request('username');
        $password = request('password');

        $this->validate($request,[
            'username'=>"required|integer",
            'password'=>'required',
        ],[
            'username.integer' => 'Le numéro de téléphone est invalde',
            'password.required' => 'Le Mot de passe obligatoire',
            'username.required' => 'Le numéro de téléphone est obligatoire'
        ]);

    //    return $request;
       $user = Auth::attempt(['username' => $username, 'password' => $password]);
    //    dd($user);

      if ($user) {
        return redirect()->route('home');
      } else {
          $errors = [
            'username.integer' => 'Votre mot de passe ou numéro de téléphone est incorrrecte',
          ];
          return redirect()->back()->withErrors($errors);
      }
      

    }


    public function register(REQUEST $request)
    {

        // return $request;
        
        $this->validate($request,[
            'username'=>"required|unique:users|integer",
            'password'=>'required|confirmed',
        ],[
            'username.unique' => 'Ce numéro de téléphone existe deja',
            'username.integer' => 'Le numéro de téléphone est invalde',
            'confirmed'=>'Les mots de passe ne correspondent pas.Verifiez...',
            'password.required' => 'Le Mot de passe obligatoire',
            'username.required' => 'Le  numéro de téléphone est obligatoire'
        ]);

        User::create([
            'nom' => request('nom'),
            'prenom' => request('prenom'),
            'username' => request('username'),
            'password' => bcrypt(request('password')),
        ]);


        return redirect()->route('login');        
       

    }
}
