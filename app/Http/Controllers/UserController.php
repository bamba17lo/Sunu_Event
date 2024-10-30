<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(){
        return view('Connexion/login');
    }

    public function signUp(){
        return view('Connexion/sign');
    }

    public function createAccount(UserRequest $request){
      $userData =  $request->validated();
      $roleId = Role::where('libelle','Participant')->first();
      $user = new User();
      
      $user->first_name = $userData['first_name'];
      $user->last_name = $userData['last_name'];
      $user->phone = $userData['phone'];
      $user->email = $userData['email'];
      $user->password = bcrypt($userData['password']);
      $user->role_id = $roleId->id;
      $user->save();

      return redirect('/')->with('success','Compte crée avec succés');
      
    }
}
