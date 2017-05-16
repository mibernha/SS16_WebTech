<?php $__env->startSection('content'); ?>
<body>
<div class="container-fluid">
    <div id="buchen" class="row"><br><br>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <form class="form" role="form">
                <?php echo csrf_field(); ?>

                <h1>Buchen</h1>
                <div class="row">
                    <div class="col-md-2 col-sm-2 col-xs-2">
                        <h4>Bootstyp</h4>
                        <select>
                            <option name="boot" value="0">Motorboot</option>
                            <option name="boot" value="1">Segelboot</option>
                        </select> 
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="form-inline">
                        <h4>Startdatum</h4>
                        <input type="date" class="form-control" name="start" value="<?php echo e(old('start')); ?>">
                        <?php if($errors->has('start')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('start')); ?></strong>
                            </span>
                        <?php endif; ?>
                        <input type="time" class="form-control" name="szeit" value="<?php echo e(old('szeit')); ?>">
                        <?php if($errors->has('szeit')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('szeit')); ?></strong>
                            </span>
                        <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <h4>Enddatum</h4>
                        <div class="form-group form-inline" id="ende">
                            <input type="date" class="form-control" name="ende" value="<?php echo e(old('ende')); ?>">
                            <?php if($errors->has('ende')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('ende')); ?></strong>
                            </span>
                            <?php endif; ?>
                            <input type="time" class="form-control" name="ezeit" value="<?php echo e(old('ezeit')); ?>">
                            <?php if($errors->has('ezeit')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('ezeit')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>
                            <div class="form-group">
                                <button type="submit" onclick="availability()" class="btn btn-primary">Verfügbarkeit überprüfen</button>
                            </div>
                            <div id="notification"></div>
                            <div id="available"></div><br>
                            </div>
                        </div>
                    </div>
                   <!-- <h1>Booking</h1>
                    <div class="checkbox">
                        <select>
                            <option name="boot" value="0">Motorboot</option>
                            <option name="boot" value="1">Segelboot</option>
                        </select>
                        <label><input type="radio" name="boot" value="0"> Motorboot</label>
                        <label><input type="radio" name="boot" value="1"> Segelboot</label>
                    </div>
                    <h4>Startdatum</h4>
                    <div class="form-inline">
                    <div class="form-group" id="start">
                        <input type="date" class="form-control" name="start" value="<?php echo e(old('start')); ?>">
                        <?php if($errors->has('start')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('start')); ?></strong>
                            </span>
                        <?php endif; ?>
                        <input type="time" class="form-control" name="szeit" value="<?php echo e(old('szeit')); ?>">
                        <?php if($errors->has('szeit')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('szeit')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>
                    <h4>Enddatum</h4>
                    <div class="form-group form-inline" id="ende">
                        <input type="date" class="form-control" name="ende" value="<?php echo e(old('ende')); ?>">
                        <?php if($errors->has('ende')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('ende')); ?></strong>
                            </span>
                        <?php endif; ?>
                        <input type="time" class="form-control" name="ezeit" value="<?php echo e(old('ezeit')); ?>">
                        <?php if($errors->has('ezeit')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('ezeit')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>
                     <div class="form-group">
                        <button type="submit" onclick="availability()" class="btn btn-primary">Verfügbarkeit überprüfen</button>
                    </div>
                    <div id="notification"></div>
                    <div id="available"></div><br>
                    </div> -->

            </form>
        </div>
    </div>
    <div id="index2" class="row"><br><br>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1>KONBOAT - So einfach haben Sie noch nie ein Boot in Konstanz gemietet</h1>
                <h2>Unser Unternehmenskonzept</h2>
                <p>Herzlich Willkommen!! Wir begrüßen Sie auf unserer Website "KONBOAT".</p>
                <p>Bei uns können Sie bequem von zu Hause Ihren Urlaub am
                    Bodensee mit schönen Stunden auf dem Wasser planen.</p>
                <p>Wir sind ein Segelboot- und Motorbootverleih am schönen
                    Bodensee in Konstanz.</p>
                <p>Unser Start-Up Unternehmen besteht aus einem dreiköpfiges
                    Team, welches sich um die Online-Vermietungen, die Instanthaltung
                    der Boote sowie</p>
                <p>sich um die Kunden kümmert. Bei uns können Sie bequem von zu
                    Hause ein Segelboot oder ein Motorboot mieten.</p>
                <p>Dabei können Sie entscheiden, ob Sie einen Tag oder auch
                    mehrere Tage Zeit auf dem Boot verbringen wollen.</p>
        </div>
    </div>
</div>
    <!--Carousel-->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Positionsanzeiger -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="images\Motorboot_01.jpg" width="100%" height="100%">
            <div class="carousel-caption">
                <h3>
                    <a href="#motorboot" data-toggle="modal">Jeanneau Cap Camarat 5.5</a>
                </h3>
            </div>
        </div>
        <div class="item">
            <img src="images\Segelboot_02.jpg" width="100%" height="100%">
            <div class="carousel-caption">
                <h3>
                    <a href="#segelboot" data-toggle="modal">Variante K3</a>
                </h3>
            </div>
        </div>
    </div>
    <!-- Schalter -->
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> 
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Weiter</span>
    </a> 
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> 
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> 
        <span class="sr-only">Zurück</span>
    </a>
</div>
<div class="container-fluid">
    <div id="anfahrt" class="row"><br><br>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                    <h1>So einfach erreichen Sie uns!!</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="btn-group" role="group" aria-label="...">
                        <a href="#pkw" type="button" class="btn btn-info btn-lg">Auto</a>
                        <a href="#bus" type="button" class="btn btn-info btn-lg">Bus</a>
                        <a href="#kat" type="button" class="btn btn-info btn-lg">Katamaran</a>
                    </div>
                </div>
            </div>
            <p>Wie sie uns finden ...</p>
        </div>
    </div>
</div>
<section id="canvas1">
    <iframe id="map_canvas1"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2687.1629858317515!2d9.175843747794321!3d47.66183006393721!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479af71ce5a312d9%3A0x658713027fd2ef4a!2sKonzilstra%C3%9Fe+1%2C+78462+Konstanz!5e0!3m2!1sde!2sde!4v1459674918988"
        width="100%" height="450" style="border: 0" class="maps">
    </iframe>
</section>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h2 id="pkw">Mit dem PKW ...</h2>
            <p>Wenn Sie von der Autobahn A81 auf die B33 herkommend nach
                Konstanz fahren, fahren Sie zunächst immer gerade aus.</p>
            <p>Fahren Sie über die Schentzlebrücke Richtung Schweiz. Biegen
                Sie die zweite Möglichkeit links ab. Sie fahren nun Richtung
                Konstanz Zentrum.</p>
            <p>Sie können am 
                <a href="http://www.konstanz.de/tourismus/01759/01765/01771/">Döbele</a> parken, im 
                <a href="http://www.stadt.konstanz.de/tourismus/01759/01765/01767/index.html">Lago</a> oder an der 
                <a href="http://www.konstanz.de/tourismus/01759/01765/01768/">Markstätte</a>.
            </p>
            <h2 id="bus">Mit dem Bus ...</h2>
            <p>Steigen Sie an der Marktstätte aus und laufen am PANO die
                Unterführung Richtung See durch.</p>
            <p>Nach der Unterführung laufen Sie links. In 200m auf der
                rechten Seite haben Sie Ihr Ziel erreicht.
            <h2 id="kat">Mit dem Katamaran ...</h2>
            <p>Wenn Sie mit dem Katamaran von Friedrichshafen anreisen,
                kommen Sie direkt gegenüber vom Konzil an.</p>
            <p>Dort müssen Sie nur noch 200m Richtung Stadtgarten laufen</p>
        </div>
    </div>
    <div id="events" class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h2>Events</h2>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-sx-4">
                    <div>
                        <?php $results = DB::select('SELECT * FROM event'); ?>
                        <?php foreach($results as $res): ?>
                            <p><?php echo e($res->datum); ?> <?php echo e($res->titel); ?></p>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="unterkunft" class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h2>Unterkunft</h2>
            <p>Sind Sie für Ihren Aufenthalt am Bodensee noch auf der Suche nach einer Unterkunft?</p>
            <p>Im folgenden haben wir Ihnen eine Auswahl an Pensionen und Hotels zusammengestellt.</p>
            <div class="jumbotron" id="jumb">
                <ol class="nostyle">
                    <li><a href="http://www.petershof.de/">Petershof</a></li>
                    <li><a href="http://www.hotel-viva-sky.de/en/">Viva-Sky</a></li>
                    <li><a href="http://www.bodenseeferien.de/pension-konstanz.html">Bodenseeferien Pensionen</a></li>
                </ol>
            </div>
        </div>
    </div>
    <!--PopUpFenster "Modal"-->
    <div class="modal fade" id="motorboot" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <p>Jeanneau Cap Camarat 5.5</p>
                </div>
                <div class="modal-body">
                    <p>
                    <p>WA Serie 2 - unser "leichtes, schnelles"</p>
                    <p>Mit gerade einmal 800kg, einer Länge von 5,21m und einer
                        Breite von 2,36m ist es unser</p>
                    <p>kleinstes und das am einfachsten zu steuernde Boot.</p>
                    <p>Das Motorboot bestit einen leistungsstarken 120PS starken
                        Motor der Klasse 3</p>
                    <p>und ist damit sehr verbrauchsarm und umweltschonend.</p>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-default" data-dismiss="modal"> Close </a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="segelboot" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <p>Variante K3</p>
                </div>
                <div class="modal-body">
                    <p>
                    <p>"der Klassiker" unter den Segelbooten</p>
                    <p>Das K3 ist eines der am weitesten verbreiteten Segelboote
                        mit einer sehr robusten Bausweise</p>
                    <p>Es bietet auf einer Länge von 6,40m genug Platz für 5 Personen haben.</p>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-default" data-dismiss="modal"> Close </a>
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
                <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/login')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">E-Mail Addresse:</label>
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>">
                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Passwort</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">
                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Eingeloggt bleiben
                                    </label>
                                </div>
                            </div>
                        </div>
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
    <div class="modal fade" id="pwreset" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <p>Passwort zurücksetzen</p>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/password/email')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">E-Mail Address</label>
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>">
                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-envelope"></i>Send Password Reset Link
                                </button>
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
</div>
    
</body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>