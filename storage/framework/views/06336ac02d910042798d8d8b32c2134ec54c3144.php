<html>
<head>
<title>Formular</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<script type="text/javascript" src="javascripts/jquery/jquery-2.2.3.js"></script>
<script type="text/javascript" src="javascripts/jquery/jquery.easing.1.3.js"></script>
<link rel="stylesheet" media="screen" href="stylesheets/stylev2.css" />
<link href="stylesheets/bootstrap.min.css" rel="stylesheet">
<link rel="icon" href="public/images/Boat_Icon.png" type="image/png">
<script src="javascripts/bootstrap.js"></script>
<script type="text/javascript" src="javascripts/validator.js"></script>
<script src="javascripts/konboat.js"></script>

</head>
<body>
    <header>
        <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#myNavbar">

                    <span class="icon-bar"></span> <span class="icon-bar"></span> <span
                        class="icon-bar"></span>
                </button>
                    <a class="navbar-brand" href="<?php echo e(url('/home')); ?>"> <img
                        src="../public/images/Logo_Bodensee01.png"
                        alt="Logo_Bodensee01.png" width="80px">
                    </a>

                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo e(url('/')); ?>">Zurück</a></li>
                    </ul>
                    <ol class="nav navbar-nav navbar-right">
                        <?php if(Auth::guest()): ?>
                        <li><a href="<?php echo e(url('/register')); ?>">Registrieren</a></li>
                        <li><a class="fa fa-btn fa-sign-in" href="#login" data-toggle="modal"> Login</a></li>
                        <?php else: ?>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Hallo, <?php echo e(Auth::user()->vorname); ?>

                            <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo e(url('/registrieren')); ?>">Profil bearbeiten</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo e(url('/logout')); ?>"><i class="fa fa-btn fa-sign-out"></i>Ausloggen</a></li>
                            </ul>
                        </li>                        
                        <?php endif; ?>
                    </ol>
                </div>
            </div>
        </nav>

    </header>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="jumbotron" id="jumbotron2">
                <form class="form-horizontal" data-toggle="validator" role="form" method="POST" action="<?php echo e(url('/register')); ?>">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group has-feedback">
                            <label for="vorname" class="col-md-4 control-label">Vorname</label>
                            <div class="form-group col-md-6">
                                <input type="text" id="vorname" class="form-control" name="vorname" pattern="[A-Z][a-z]{1,}" maxlength="30" required data-error="Kein gültiger Vorname">
                                <div class="help-block with-errors col-md-12"></div>
                            </div>                            
                        </div>
                        <div class="form-group has-feedback">
                            <label for="nachname" class="col-md-4 control-label">Nachname</label>
                            <div class="form-group col-md-6">
                                <input id="nachname" type="text" class="form-control" name="nachname" pattern="[A-Z][a-z]{1,}" maxlength="30" required data-error="Kein gültiger Nachname">
                                <div class="help-block with-errors col-md-12"></div>
                            </div>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                            <div class="form-group col-md-6">
                                <input id="email" type="email" class="form-control" name="email" required date-error="Keine gültige E-Mail-Adresse">
                                <div class="help-block with-errors col-md-12"></div>
                            </div>
                        </div>

                        <div class="form-group has-feedback">
                            <label for="password" class="col-md-4 control-label">Password</label>
                            <div class="form-group col-md-6">
                                <input id="password" type="password" class="form-control" name="password" data-minlength="8" data-error="Passwort muss 8 Zeichen lang sein!" required>
                                <div class="help-block with-errors col-md-12"></div>    
                            </div>                        
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                            <div class="form-group col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" data-match="#password" data-match-error="Passwort stimmt nicht überein" required>
                                <div class="help-block with-errors col-md-12"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</div>
<div class="modal fade" id="login" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <p>Anmelden</p>
                </div>
                <div class="modal-body">
                <form class="form-horizontal" data-toggle="validator" role="form" method="POST" action="<?php echo e(url('/login')); ?>">
                        <?php echo csrf_field(); ?>

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
</body>
</html>
