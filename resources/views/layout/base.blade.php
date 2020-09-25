@section('menu')
{{--@section('style')<style src="{{ elixir("assets/css/app.css") }}></style>@endsection--}}
<html lang="{{ app()->getLocale() }}">
<link rel="stylesheet" href="{{ elixir("assets/css/app.css") }}">
    <body>
        <nav class="nav">
            <div class="container">
                <div class="logo">
                    <a href="#"><img src="../public/img/logo.PNG">   </a>
                </div>
                <div id="mainListDiv" class="main_list">
                    <ul class="navlinks">
                        <li><a href="#">COCKTAILS</a></li>
                        <li><a href="#">LIEUX</a></li>
                        <li><a href="#">A PROPOS</a></li>
                        <li><a href="#">ESPACE MEMBRE</a></li>
                    </ul>
                </div>
                <span class="navTrigger">
                <i>bla</i>
                <i>bl1</i>
                <i>blo</i>
                    <a href="#">S'INSCRIRE</a>
            </span>
            </div>
        </nav>

        <section class="home">
        </section>
        <div style="height: 1000px">
            <!-- just to make scrolling effect possible -->
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum ratione facere animi impedit rem labore sint repellendus ipsa sapiente voluptatem aut excepturi quo itaque, ab earum cumque. Voluptatem beatae id inventore quod voluptate qui deserunt, quis placeat, tempora ex totam, dolore sequi harum eos voluptatibus animi labore officiis minus laboriosam
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum ratione facere animi impedit rem labore sint repellendus ipsa sapiente voluptatem aut excepturi quo itaque, ab earum cumque. Voluptatem beatae id inventore quod voluptate qui deserunt, quis placeat, tempora ex totam, dolore sequi harum eos voluptatibus animi labore officiis minus laboriosam
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum ratione facere animi impedit rem labore sint repellendus ipsa sapiente voluptatem aut excepturi quo itaque, ab earum cumque. Voluptatem beatae id inventore quod voluptate qui deserunt, quis placeat, tempora ex totam, dolore sequi harum eos voluptatibus animi labore officiis minus laboriosam
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum ratione facere animi impedit rem labore sint repellendus ipsa sapiente voluptatem aut excepturi quo itaque, ab earum cumque. Voluptatem beatae id inventore quod voluptate qui deserunt, quis placeat, tempora ex totam, dolore sequi harum eos voluptatibus animi labore officiis minus laboriosam
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum ratione facere animi impedit rem labore sint repellendus ipsa sapiente voluptatem aut excepturi quo itaque, ab earum cumque. Voluptatem beatae id inventore quod voluptate qui deserunt, quis placeat, tempora ex totam, dolore sequi harum eos voluptatibus animi labore officiis minus laboriosam
            </p>
        </div>
        <!-- Jquery needed -->
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
            $(window).scroll(function() {
                if ($(document).scrollTop() > 50) {
                    $('.nav').addClass('affix');
                    console.log("OK");
                } else {
                    $('.nav').removeClass('affix');
                }
            });
        </script>
    </body>
</html>

@show