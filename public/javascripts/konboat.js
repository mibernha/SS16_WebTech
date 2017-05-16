//Zahlungsmethoden aufklappen
$(document).ready(function() {		
		$("#ueberweisung").hide();
		$("#ueber").click(function() {
			$("#ueberweisung").slideToggle("slow");
		});
		$("#paypal").hide();
		$("#pay").click(function() {
			$("#paypal").slideToggle("slow");
		});
		$("#kreditkarte").hide();
		$("#kredit").click(function() {
			$("#kreditkarte").slideToggle("slow");
		});
		$('#map_canvas1').addClass('maps'); // set the pointer events to none on doc ready
        $('#canvas1').on('click', function () {
            $('#map_canvas1').removeClass('maps'); // set the pointer events true on click
        });

        // you want to disable pointer events when the mouse leave the canvas area;

        $("#map_canvas1").mouseleave(function () {
            $('#map_canvas1').addClass('maps'); // set the pointer events to none when mouse leaves the map area
        });
        
			//Add smooth scrolling to all links		
		$(".page-scroll").on('click', function(event){
			//Prevent default anchor click behavior
			event.preventDefault();		
			//Store hash
			var hash = this.hash;		
			//scroll to the specified area
			$('body').animate({
				scrollTop:$(hash).offset().top
			}, 800, function(){
				//Add hash(#) to URL when done scrolling (default click behavior)
				window.location.hash = hash;		
			});			
		});

});

Date.prototype.toDateInputValue = (function() {
    var local = new Date(this);
    local.setMinutes(this.getMinutes() - this.getTimezoneOffset());
    return local.toJSON().slice(0,10);
});

function ajaxplz() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') 
        }
    });
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');   
    $.post(
        'zipcode',
        {
            _token: CSRF_TOKEN,
            plz: $('input[name=plz]').val()
        },
        function(data, status){
            if(data == null){
                return false;
            } else {
                var output = data;
                $('#ortajax').val(output);       
            }
        }
    )
            
}
function availability(){
	    //Ajax für Verfügbarkeitsprüfung
        $.ajaxSetup({
        	headers: {
        		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') 
        	}
        });
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');       
        event.preventDefault();
        $.post(
        	'available',
        	{ 
        		_token: CSRF_TOKEN,
        		boot: $('input[name=boot]:checked').val(),
        		start: $('input[name=start]').val(),
        		ende: $('input[name=ende]').val(),
        		szeit: $('input[name=szeit]').val(),
        		ezeit: $('input[name=ezeit]').val()
        	},
        	function(data, status){
        		if(data == "true"){
        			var button = "<a class='btn btn-primary' onclick='savebooking()'>Buchen</button>";
                    var sucs = "<div class='alert alert-success fade in'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Boot verfügbar! Jetzt buchen:</strong></div>";
                    $('#available').empty();
        			$(button).appendTo('#available');
                    $('#notification').empty();
                    $(sucs).appendTo('#notification');
        		} else {
                    var fail = "<div class='alert alert-danger fade in'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Alle Boote sind im gewünschten Zeitraum bereits ausgebucht.</strong></div>";
        			$('#available').empty();
                    $('#notification').empty();
                    $(fail).appendTo('#notification');
        		}
        	})
}

function validateAvailability() {
    var startdatum = document.getElementById('start').value;
    var startzeit = document.getElementById('szeit').value;
    var enddatum = document.getElementById('ende').value;
    var endzeit = document.getElementById('ezeit').value;
    if(startdatum != "" && startdatum.match(/^\d{4}-\d{2}-\d{2}$/) && enddatum != "" 
        && enddatum.match(/^\d{4}-\d{2}-\d{2}$/) && startzeit != "" && endzeit != ""
        && (startdatum < enddatum || (startdatum == enddatum && startzeit < endzeit)))
    {
            availability();
    } else {
        var fail = "<div class='alert alert-danger fade in'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Bitte füllen Sie alle korrekt Felder aus!</strong></div>"
        $(fail).appendTo('#notification');
        return false;
    }
}

function savebooking(){   
		$.ajaxSetup({
        	headers: {
        		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') 
        	}
        });
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');   
        $.post(
        	'book',
        	{ 
        		_token: CSRF_TOKEN,
        		boot: $('input[name=boot]:checked').val(),
        		start:  $('input[name=start]').val(),
        		ende: $('input[name=ende]').val(),
        		szeit: $('input[name=szeit]').val(),
        		ezeit: $('input[name=ezeit]').val()
        	},
        	function(data){
                if(data=='false'){
                    eval('$("#login").modal("toggle");');
                } else {
                    var success = "<div class='alert alert-success fade in'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Buchung erfolgreich abgeschlossen!</strong></div>";
                    $('#available').empty();
                    $('#notification').empty();
                    $(success).appendTo('#notification');
                }
        	})
}

//Regex IBAN

function init(){
	var iban = document.getElementId('input');
		iban.addEventListener('keypress', ibanpruefen);
}

function ibanpruefen(){
	var iban = document.getElement('text');
	var check = iban.match(/[a-zA-Z]{2}[0-9]{2}[a-zA-Z0-9]{4}[0-9]{7}([a-zA-Z0-9]?){0,16}/);
}