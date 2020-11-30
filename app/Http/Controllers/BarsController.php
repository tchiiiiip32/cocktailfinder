<?php

namespace App\Http\Controllers;

use App\Cocktail;
use Illuminate\Http\Request;
use App\Bar;

class BarsController extends Controller
{
    public function index() {
        return view('places', ['bar'=>Bar::get()]);
    }

    public function view (Cocktail $cocktail) {}

    public function viewByid() {}

    public function edit () {}

    public function delete () {}
}
