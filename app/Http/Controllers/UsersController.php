<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function getUsers()
    {
        return view('login');
    }

    public function postUsers(Request $request)
    {
        return 'L\'email est :' . $request->input('email') + 'et le mot de passe est :' . $request->input('mdp');
    }

    // finir le MVC du contact

    public function getContacts()
    {
        return view('contact', ['contact'=>User::get()]);
    }

    public function postContacts(Request $request)
    {
        return view('contact', ['contact'=>User::post()]);
    }
}
