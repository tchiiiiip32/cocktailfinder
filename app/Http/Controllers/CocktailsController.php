<?php

namespace App\Http\Controllers;

use App\Cocktail;
use App\Http\Requests;


class CocktailsController extends Controller
{
    public function index() {
        return view('accueil', ['cocktail'=>Cocktail::get()]);
    }

    public function show($n)
    {
        return view('accueil')->with('numero', $n);
    }
}
