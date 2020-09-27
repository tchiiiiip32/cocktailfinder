<?php

namespace App\Http\Controllers;

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
}
