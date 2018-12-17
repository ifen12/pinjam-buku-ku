<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset('css/materialize.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/iconmaterial.css')}}">

        <script src="{{asset('js/jquery-3.1.0.min.js')}}"></script>
        <script src="{{asset('js/materialize.min.js')}}"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100px;
                margin: 0;
            }

            .menu-header .dropdown-content{
            margin-top: 65px !important;
            border-bottom: 3px solid #680cea;
            }

            .menu-header .dropdown-content{
                width: 200px !important;
                background-color: #202020 !important; 
            }
            
            .menu-header .dropdown-content li a{
                color: #fff !important;
                font-size: 12px !important;
            }

            .bac{
                margin-top: -25px;
                background: url({{ ('img/perpus.jpg') }});
                width: 1350px;
                height: 600px;
            }

            .mobile{
                text-align: center;
            }
        </style>
    </head>
    <body>
        @if (Route::has('login'))
            <ul id="dropdown1" class="dropdown-content">
                @if (Auth::check())
                
                @else
                <li><a href="{{ url('/home') }}">Home</a></li>
                <li><a href="{{ url('/login') }}">Login Admin</a></li>
                <li class="divider"></li>
                <li><a href="{{ url('/register') }}">Register</a></li>
                @endif
            </ul>
        @endif
        <nav class="menu-header blue-grey darken-4">
            <div class="nav-wrapper container">
                <a href="#!" class="brand-logo">welcome</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <!-- Dropdown Trigger -->
                    <li>
                    <a class="dropdown-button" href="#!" data-activates="dropdown1">Sing Up
                        <i class="material-icons right">arrow_drop_down</i>
                    </a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="row bac">
            <div class="mobile">
                <h2 class="light grey-text text-lighten-3">This is our big aplication library!!!</h2>
                <h5 class="light grey-text text-lighten-3">This is the application I made.</h5>
            </div>
            <div class="col s12">
                
            </div>
        </div>

        <footer class="page-footer blue-grey darken-4" style="margin-top: -18px;">
            <div class="container">
                <div class="footer-copyright">
                    © 2017 Copyright Text
                    <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
                  </div>
            </div>
        </footer>
    </body>
    <script>
        $(".dropdown-button").dropdown();
        $('.materialboxed').materialbox();
    </script>
</html>
