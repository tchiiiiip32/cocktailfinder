<?php

namespace App\Http\Controllers;

use App\Cocktail;

class CocktailsController extends Controller
{
    public function index() {
       return Cocktail::get();
    }
}