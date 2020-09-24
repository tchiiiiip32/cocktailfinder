<?php

use App\Http\Controllers\CocktailsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function()
{
    return view('layout/base');
});
Route::get('/cocktails', ['uses' => 'CocktailsController@index']);
Route::get('/places', ['uses' => 'BarsController@index']);
Route::get('/aboutus', ['uses' => 'AboutUsController@index']);
//Route::get('/', 'CocktailsController@index');
//Route::get('/Cocktail', [CocktailsController::class,'index']);
