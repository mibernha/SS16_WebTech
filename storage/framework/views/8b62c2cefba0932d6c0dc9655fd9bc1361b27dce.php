<html>
<head>
<title>Formular</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<script type="text/javascript" src="javascripts/jquery/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="javascripts/jquery/jquery-2.2.3.js"></script>
<link rel="stylesheet" href="stylesheets/stylev2.css" />
<link rel="stylesheet" href="stylesheets/bootstrap.min.css">
<link rel="icon" href="images/Boat_Icon.png" type="image/png">
<script src="javascripts/bootstrap.js"></script>
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
                        src="/images/Logo_Bodensee01.png"
                        alt="Logo_Bodensee01.png" width="80px">
                    </a>

                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo e(url('/home')); ?>">Zurück</a></li>
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

        <div class="jumbotron">
            <div class="row">
                <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/speichern')); ?>">
                    <?php echo csrf_field(); ?>

                    <div class="row">
                    <h2>Kundendaten</h2>
                    <div class="checkbox">
                        <label class="radio-inline"><input type="radio" name="sex" value="1" 
                        <?php if(Auth::user()->sex === 1){ echo 'checked'; } ?>> Herr</label>
                        <label class="radio-inline"><input type="radio" name="sex" value="2"
                        <?php if(Auth::user()->sex === 2){ echo 'checked'; } ?>> Frau</label>
                    </div>
                    </div>
                    <div class="row">
                     <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <div class="form-group" id="vorname">
                            <label for="vorname" class="control-label">Vorname:</label>
                            <input type="text" class="form-control" name="vorname" placeholder=<?php echo Auth::user()->vorname?> readonly>
                            <?php if($errors->has('vorname')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('vorname')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>
                     <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                     </div>
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <div class="form-group" id="nachname">
                            <label for="nachname" class="control-label">Nachname:</label>
                            <input type="text" class="form-control" name="nachname" placeholder=<?php echo Auth::user()->nachname?> readonly>
                            <?php if($errors->has('nachname')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('nachname')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                            <div class="form-group" id="straße">
                                <label for="straße" class="control-label">Strasse: </label>
                                <input type="text" class="form-control" name="straße" value=<?php echo Auth::user()->straße?> >
                                <?php if($errors->has('straße')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('straße')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                             <div class="form-group" id="hnr">
                                <label for="hnr" class="control-label">HausNr.: </label>
                                <input type="text" class="form-control" name="hnr" value=<?php echo Auth::user()->hnr?> >
                                <?php if($errors->has('hnr')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('hnr')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                     <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <div class="form-group" id="plz">
                            <label for="plz" class="control-label">PLZ:</label>
                            <input type="text" class="form-control" name="plz" value=<?php echo Auth::user()->plz?>>
                            <?php if($errors->has('plz')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('plz')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                     </div>
                     <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                     </div>
                     <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <div class="form-group" id="ort">
                            <label for="ort" class="control-label">Ort: </label>
                            <input type="text" class="form-control" name="ort" value=<?php echo Auth::user()->ort?>>
                            <?php if($errors->has('ort')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('ort')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                            <div class="form-group" id="land">
                                <label for="land" class="control-label">Land:</label>
                                <input type="text" class="form-control" name="land" value=<?php echo Auth::user()->land?>>
                                <?php if($errors->has('land')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('land')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                         <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                         </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">

                            <div class="form-group" id="geburtsdatum">
                                <label for="gb" class="control-label">Geburtsdatum:</label>
                                <input type="date" class="form-control" name="geburtsdatum" value=<?php echo Auth::user()->geburtsdatum?>>
                                <?php if($errors->has('geburtsdatum')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('geburtsdatum')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                            <div class="form-group" id="persoid">
                                <label for="persoid" class="control-label"> Personalausweis-ID:</label>
                                <input type="text" class="form-control" name="persoid" value=<?php echo Auth::user()->persoid?>>
                                <?php if($errors->has('persoid')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('persoid')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                     <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                            <div class="form-group" id="email">
                                <label for="email" class="control-label"> E-Mail Adresse:</label>
                                <input type="email" class="form-control" name="email" placeholder=<?php echo Auth::user()->email?> readonly>
                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                     </div>
                      <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                      </div>
                    </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Speichern</button>
                        </div>
                    </div>
                </form>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2>Zahlungsmöglichkeiten</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <div id="kredit">
                            <button type="button" class="btn btn-primary btn-block">Kreditkarte</button>
                        </div>
                        <div id="kreditkarte">

                            <form role="form">
                                <div class="form-group">
                                    <label for="whichone" class="control-label">Wählen Sie eine Kreditkarte: </label> <select
                                        class="form-control" id="whichone">
                                        <option>Visa</option>
                                        <option>MasterCard</option>
                                    </select> <label for="kinhaber" class="control-label">Karteninhaber</label> <input type="text"
                                        class="form-control" id="kinhaber"> <label
                                        for="knummer" class="control-label">Kartennummer</label> <input type="text"
                                        class="form-control" id="knummer"> <label
                                        for="gueltig" class="control-label">Gültig bis</label> <input type="date"
                                        class="form-control" id="gueltig" /> <label for="pruef">Prüfziffer</label>
                                    <input type="text" class="form-control" id="pruef">

                                    
                                </div>
                            </form>


                        </div>
                        <div id="pay">
                            <button type="button" class="btn btn-primary btn-block">
                                PayPal</button>
                        </div>
                        <div id="paypal">
                            <br> <a
                                href="https://www.paypal.com/cgi-bin/webscr?cmd=_express-checkout&token=EC-5T251378ES549402B&useraction=commit#/checkout/login">
                                Zu Ihrem PayPal-Account </a> <br>
                        </div>


                        <div id="ueber">
                            <button type="button" class="btn btn-primary btn-block">Überweisung</button>
                        </div>
                        <div id="ueberweisung">

                            <form role="form">
                                <div class="form-group">
                                    <label for="inhaber" class="control-label">Kontoinhaber:</label> <input
                                        type="inhaber" class="form-control" id="inhaber"
                                        placeholder="Vor- und Nachname"> <label for="iban" class="control-label">IBAN:</label>
                                    <input type="iban" class="form-control" id="iban"
                                        placeholder="z.B. DE12345678913213"> <label for="bic" class="control-label">BIC:</label>
                                    <input type="bic" class="form-control" id="bic"
                                        placeholder="bic"> <label for="betrag" class="control-label">Betrag:</label>
                                    <input type="betrag" class="form-control" id="betrag"
                                        placeholder="Betrag">                                   
                                </div>


                            </form>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2>Scheine</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/bssp')); ?>">
                            <?php echo csrf_field(); ?>

                            <p>Bitte laden Sie hier ihr Bodenseeschifffahrtspatent A und ihren
                                Bootsführerschein hoch:</p>
                            <label class="btn btn-default btn-file">
                                Datei hochladen... <input type="file" style="display: none;" name="bsspatent">
                            </label>
                            <label class="btn btn-default btn-file">
                                Speichern<input type="submit" style="display: none;">
                            </label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <footer>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <ol class="nav navbar-nav navbar-right">
                    <li><a href="impressum">Impressum und Rechtliche Hinweise</a></li>
                </ol>
            </div>
        </nav>
    </footer>
</body>
</html>