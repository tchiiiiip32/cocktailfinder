@extends('layout.base')

<html lang="{{ app()->getLocale() }}">
    <body>
    <div class="container">
        @section('menu')
        <h1 style="color: #1f648b;"> LES COCKTAILS</h1>
        {{ $cocktail }}
    </div>
    </body>
</html>