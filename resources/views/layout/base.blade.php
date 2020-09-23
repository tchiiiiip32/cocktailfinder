<html lang="{{ app()->getLocale() }}">
    <body>
    <div class="container">
        @section('menu')
            <div class="container-fluid">
                <nav class="navbar navbar-inverse">
                    <div class="container-fluid">
                        <ul class="nav navbar-nav">
                            <li><a id="len1" class="hoverable" href="#">ACCUEIL</a></li>
                            <li><a id="len2" class="hoverable" href="#">COCKTAILS</a></li>
                            <li><a id="len3" class="hoverable" href="#">LIEUX</a></li>
                            <li><a id="len4" class="hoverable" href="#">A PROPOS</a></li>
                        </ul>
                    </div>
                </nav>
                <div id="what-the-hell-is-this">
                    <div class="page-title">
                        <h2>Simple Navigation</h2>
                        <p class="lead">
                            Based on Hover.css, the goal of this pen
                            is to create a simple navigation bar <br />
                            that can be easily reused in both mobile and native displays. Mouse over the nav text for animation!
                        </p>
                    </div>
                </div>
            </div>
        @show
    </div>
    </body>
</html>