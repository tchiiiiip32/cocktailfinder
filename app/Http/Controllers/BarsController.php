<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bars;

class BarsController extends Controller
{
    public function index() {
        $bar = $this.Bars::all();
    }

    public function GetBars() {
        $bar = $this.Bars::get();
    }

    public function PostBars() {
        $bar = $this.Bars::post();
    }
}
