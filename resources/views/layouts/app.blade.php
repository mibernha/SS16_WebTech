<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    <title>Konboat</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">-->

    <!-- Styles -->
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    
    <script type="text/javascript" src="javascripts/jquery/jquery-2.2.3.js"></script>
    <script type="text/javascript" src="javascripts/jquery/jquery.easing.1.3.js"></script>
    <link rel="stylesheet" media="screen" href="stylesheets/stylev2.css" />
    <link href="stylesheets/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="../public/images/Boat_Icon.png" type="image/png">
    <script src="javascripts/bootstrap.js"></script>
    <script type="text/javascript" src="javascripts/validator.js"></script>
    <script src="javascripts/konboat.js"></script>


    
</head>
<body id="app-layout">
<header>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
                <a class="navbar-brand" href="{{ url('/') }}"> 
                    <img src="../public/images/Logo_Bodensee01.png" alt="Logo_Bodensee01.png" width="80px" >
                </a>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a class="page-scroll" href="{{ url('/home#index2') }}">Wir über uns</a></li>
                        <li><a class="page-scroll" href="{{ url('/home#buchen') }}">Buchen</a></li>
                        <li><a class="page-scroll" href="{{ url('/home#preis') }}">Preis</a></li>
                        <li><a class="page-scroll" href="{{ url('/home#anfahrt') }}">Anfahrt</a></li>
                        <li><a class="page-scroll" href="{{ url('/home#events') }}">Event</a></li>
                        <li><a class="page-scroll" href="{{ url('/home#unterkunft') }}">Unterkunft</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        @if (Auth::guest())
                        <li><a href="{{ url('/register') }}">Registrieren</a></li>
                        <li><a class="fa fa-btn fa-sign-in" href="#login" data-toggle="modal"> Login</a></li>
                        @else
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Hallo, {{ Auth::user()->vorname }}<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('/profil') }}">Profil bearbeiten</a></li>
                                <li class="divider"></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Ausloggen</a></li>
                            </ul>
                        </li>                        
                        @endif
                    </ul>
                </div>
        </div>
    </nav>
</header>
<div class="modal fade" id="login" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <p>Anmelden</p>
                </div>
                <div class="modal-body">
                <form class="form-horizontal" data-toggle="validator" role="form" method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}
                        <div class="form-group has-feedback">
                            <label class="col-md-4 control-label">E-Mail Addresse:</label>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email" data-error="Kein gültige E-Mail-Adresse">
                                <div class="help-block with-errors col-md-12"></div>
                            </div>
                        </div>
                        <div class="form-group has-feedback">
                            <label class="col-md-4 control-label">Passwort</label>
                            <div class="form-group col-md-6">
                                <input type="password" class="form-control" name="password" data-minlength="8">
                                <div class="help-block with-errors col-md-12"></div>
                            </div>
                        </div>
                        <!--<div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Eingeloggt bleiben
                                    </label>
                                </div>
                            </div>
                        </div>-->
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i>Login
                                </button>
                                 <a class="btn btn-link" href="#pwreset" data-dismiss="modal" data-toggle="modal">Passwort vergessen?</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-default" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>
@yield('content')

<footer>
    <nav class="navbar navbar-inverse navbar-fixed-bottom">
        <div class="container-fluid">
            <ul class="nav navbar-nav navbar-left">
                <li><a><iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fwww.facebook.com%2Ffreizeitcenter.reichenau%2F%3Ffref%3Dts&layout=link&mobile_iframe=true&width=96&height=14&appId" width="96" height="14" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="impressum">Impressum und Rechtliche Hinweise</a></li>
            </ul>
        </div>
    </nav>
</footer>

<!-- JavaScripts -->
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>