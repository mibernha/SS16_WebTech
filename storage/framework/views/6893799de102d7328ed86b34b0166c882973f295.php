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
                             <div class="form-group" id="hausnr">
                                <label for="hausnr" class="control-label">HausNr.: </label>
                                <input type="text" class="form-control" name="hausnr" value=<?php echo Auth::user()->hausnr?> >
                                <?php if($errors->has('hausnr')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('hausnr')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                     <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <div class="form-group" id="plz">
                            <label for="plz" class="control-label">PLZ:</label>
                            <input type="text" class="form-control" name="plz" onkeyup="ajaxplz()" value=<?php echo Auth::user()->plz?>>
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
                            <input type="text" class="form-control" name="ort" id="ortajax" value=<?php echo Auth::user()->ort?>>
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
                <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/zahlungsmethode')); ?>">
                    <?php echo csrf_field(); ?>

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
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <label for="whichone" class="control-label">Wählen Sie eine Kreditkarte: </label> <select
                                                class="form-control" id="whichone" name="whichone">
                                                <option>Visa</option>
                                                <option>MasterCard</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <label for="kinhaber" class="control-label">Karteninhaber</label> 
                                            <input type="text" class="form-control" id="kinhaber" name="kinhaber"> 
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <label for="knummer" class="control-label">Kartennummer</label> 
                                            <input type="text" class="form-control" id="knummer" name="knummer">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
                                            <label for="gueltig" class="control-label">Gültig bis</label> 
                                            <input type="date" class="form-control" id="gueltig" name="gueltig" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <label for="pruef">Prüfziffer</label>
                                            <input type="text" class="form-control" id="pruef" name="pruef">
                                        </div>
                                    </div>
                                    <br>
                            </div>
                            <div id="ueber">
                                <button type="button" class="btn btn-primary btn-block">Überweisung</button>
                            </div>
                            <div id="ueberweisung">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <label for="inhaber" class="control-label">Kontoinhaber:</label> 
                                            <input type="inhaber" class="form-control" id="inhaber" name="inhaber" placeholder="Vor- und Nachname">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <label for="iban" class="control-label">IBAN:</label>
                                            <input type="iban" class="form-control" id="iban" name="iban"
                                                placeholder="z.B. DE12345678913213">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <label for="bic" class="control-label">BIC:</label>
                                            <input type="bic" class="form-control" id="bic" name="bic"
                                                placeholder="bic"> 
                                        </div>
                                    </div>   
                                    <br>                              
                            </div>
                            <div id="pay">
                                <button type="button" class="btn btn-primary btn-block">PayPal</button>
                            </div>  
                            <div id="paypal">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <br>
                                        <!-- PayPal Logo --><table border="0" cellpadding="10" cellspacing="0" align="center"><tbody><tr><td align="center"></td></tr><tr><td align="center"><a href="https://www.paypal.com/de/webapps/mpp/paypal-popup" title="So funktioniert PayPal" onclick="javascript:window.open('https://www.paypal.com/de/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=715, height=539); return false;"><img src="https://www.paypalobjects.com/webstatic/de_DE/i/de-pp-logo-150px.png" border="0" alt="PayPal Logo" /></a></td></tr></tbody></table><!-- PayPal Logo -->
                                    <br>
                                    </div>
                                </div>
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
                            <p>Bitte laden Sie hier ihr Bodenseeschifffahrtspatent A und ihren
                                Bootsführerschein hoch:</p>
                            <label class="btn btn-default btn-file">
                                Datei hochladen... <input type="file" style="display: none;" name="bsspatent">
                            </label>
                            <label class="btn btn-default btn-file">
                                Speichern<input type="submit" style="display: none;">
                            </label>
                        </div>
                    </div>
                </form>
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
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>