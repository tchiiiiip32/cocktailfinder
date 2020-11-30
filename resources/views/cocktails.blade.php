@extends('layout.base')

<html lang="{{ app()->getLocale() }}">
    <body>
    <div class="container">
        @section('menu')
        <h1 style="color: #1f648b;"> LES COCKTAILS</h1>
        {{ $cocktail }}
    </div>

    {% for cocktail in cocktails %}
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{$titre}</h5>
            <p class="card-text">{$text}.</p>
            <a href="#" class="btn btn-primary">Détails</a>
        </div>
    </div>
    {% endofor %}
    </body>
</html>