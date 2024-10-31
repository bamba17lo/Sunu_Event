<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\UserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login()
    {

        return view('Connexion/login');
    }

    public function logout(){ 
        Auth::logout();
        return redirect('connecter');
    }

    public function signUp()
    {
        return view('Connexion/sign');
    }

    public function createAccount(UserRequest $request)
    {
        $userData =  $request->validated();
        $roleId = Role::where('libelle', 'Participant')->first();
        $user = new User();

        $user->first_name = $userData['first_name'];
        $user->last_name = $userData['last_name'];
        $user->phone = $userData['phone'];
        $user->email = $userData['email'];
        $user->password = bcrypt($userData['password']);
        $user->role_id = $roleId->id;
        $user->save();
        Auth::login($user);

        return redirect('/')->with('success', 'Compte crée avec succés');
    }

    public function loginForm(LoginRequest $request)
    {
        $data = $request->validated();
        
        $email = $data['email'];
        $password = $data['password'];

        if (Auth::attempt(['email'=> $email , 'password'=>$password])) {
            return redirect('/')->with('successLogin', 'Connexion réussi');
        }
        else{
            return redirect()->back()->with('errorLogin', 'Vérifier vos informations');
        }
    }

    public function indexDashboard(){
        return view('Dashboard/index');
    }
}
