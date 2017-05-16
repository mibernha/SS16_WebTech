<!DOCTYPE html>
<html>
<head>
<title>Error500</title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<script type="text/javascript" src="javascripts/jquery/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="javascripts/jquery/jquery-2.2.3.js"></script>
<link rel="stylesheet" media="screen" href="stylesheets/stylev2.css" />
<link href="stylesheets/bootstrap.min.css" rel="stylesheet">
<link rel="icon" href="public/images/Boat_Icon.png" type="image/png">
<script	src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="javascripts/bootstrap.js"></script>
<script src="javascripts/konboat.js"></script>
</head>

<body>
<div class="row">
@yield('content')
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
@yield('content')
<div id=text>
<p>Der Server konnte nicht erreicht werden!!</p>

@yield('content')
</div>
</div>
</div>

<div class="row">
@yield('content')
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
@yield('content')
<img id=error src="/public/images/error500.jpg" alt="error500.jpg">

</div>
</div>

</body>
</html>
