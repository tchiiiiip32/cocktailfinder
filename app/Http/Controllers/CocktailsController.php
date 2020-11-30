<?php

namespace App\Http\Controllers;

use App\Cocktail;
use App\Http\Requests;


class CocktailsController extends Controller
{
    public function index() {
        return view('cocktails', ['cocktail'=>Cocktail::get()]);
    }

    public function view (Cocktail $cocktail) {
        $cocktail = new Cocktail();

    }

    public function viewByid() {}

    public function edit () {}

    public function delete () {}

//    public function show($n)
//    {
//        return view('accueil')->with('numero', $n);
//    }
}
