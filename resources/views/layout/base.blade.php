@section('menu')
    {{--@section('style')<style src="{{ elixir("assets/css/app.css") }}></style>@endsection--}}
    <html lang="{{ app()->getLocale() }}">
    {{--<link rel="stylesheet" href="{{ elixir("assets/css/app.css") }}">--}}
    <link href="{{ asset('css/test.css') }}" rel="stylesheet">
    <!doctype html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
              integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
              crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.google.com/specimen/Roboto">
        <title>Cocktailfinder</title>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav nav-fill w-100">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">COCKTAILS <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">LIEUX</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">A PROPOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ESPACE MEMBRE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login">S'INSCRIRE/SE CONNECTER</a>
                    </li>
                </ul>
            </div>
        </nav>
    </head>
    <body style="background-image: url(../public/img/acceuil3.jpg); background-repeat: no-repeat;  background-size: cover">
    <p>e lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre
        provisoire
        pour calibrer une mise en page,
        le texte définitif venant remplacer le faux-texte dès qu'il est prêt ou que la mise en page est achevée.
        Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.</p>
    </body>
    <!-- Footer -->
    <footer class="page-footer font-small blue fixed-bottom">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="http://www.cesi.fr"> Site réalisé dans le cadre de la formation RIL 2019</a>
        </div>

    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
        $('.navTrigger').click(function () {
            $(this).toggleClass('active');
            console.log("Clicked menu");
            $("#mainListDiv").toggleClass("show_list");
            $("#mainListDiv").fadeIn();

        });
    </script>

    <!-- Function used to shrink nav bar removing paddings and adding black background -->
    <script>
        $(window).scroll(function () {
            if ($(document).scrollTop() > 50) {
                $('.nav').addClass('affix');
                console.log("OK");
            } else {
                $('.nav').removeClass('affix');
            }
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
    </html>

