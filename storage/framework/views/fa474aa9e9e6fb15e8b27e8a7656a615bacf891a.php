<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>"/>

    <title>Konboat</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <?php /* <link href="<?php echo e(elixir('css/app.css')); ?>" rel="stylesheet"> */ ?>
    
    <script type="text/javascript" src="javascripts/jquery/jquery-2.2.3.js"></script>
    <script type="text/javascript" src="javascripts/jquery/jquery.easing.1.3.js"></script>
    <link rel="stylesheet" media="screen" href="stylesheets/stylev2.css" />
    <link href="stylesheets/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="images/Boat_Icon.png" type="image/png">
    <script src="javascripts/bootstrap.js"></script>
    <script src="javascripts/konboat.js"></script>


    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
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
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>"> 
                    <img src="/images/Logo_Bodensee01.png" alt="Logo_Bodensee01.png" width="80px">
                </a>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a class="page-scroll" href="#index2">Wir über uns</a></li>
                        <li><a class="page-scroll" href="#buchen">Buchen</a></li>
                        <li><a class="page-scroll" href="#anfahrt">Anfahrt</a></li>
                        <li><a class="page-scroll" href="#events">Event</a></li>
                        <li><a class="page-scroll" href="#unterkunft">Unterkunft</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php if(Auth::guest()): ?>
                        <li><a href="<?php echo e(url('/register')); ?>">Registrieren</a></li>
                        <li><a class="fa fa-btn fa-sign-in" href="#login" data-toggle="modal"> Login</a></li>
                        <?php else: ?>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Hallo, <?php echo e(Auth::user()->vorname); ?><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo e(url('/profil')); ?>">Profil bearbeiten</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo e(url('/logout')); ?>"><i class="fa fa-btn fa-sign-out"></i>Ausloggen</a></li>
                            </ul>
                        </li>                        
                        <?php endif; ?>
                    </ul>
                </div>
        </div>
    </nav>
</header>
<?php echo $__env->yieldContent('content'); ?>
<footer>
    <nav class="navbar navbar-inverse navbar-fixed-bottom">
        <div class="container-fluid">
            <ol class="nav navbar-nav navbar-right">
                <li><a href="impressum">Impressum und Rechtliche Hinweise</a></li>
            </ol>
        </div>
    </nav>
</footer>

<!-- JavaScripts -->
<?php /* <script src="<?php echo e(elixir('js/app.js')); ?>"></script> */ ?>
</body>
</html>