<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bar;

class BarsController extends Controller
{
    public function index() {
        return view('places', ['bar'=>Bar::get()]);
    }
}
