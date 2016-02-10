<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('favicon.png') }}">

    <title>Plateforme SI-RH</title>

    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/start/jquery-ui.css">
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>

<body>

<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">SI RH - <span style="color:#CCC;font-size:14px;">{{ substr($_SERVER['AUTH_USER'], 3) }}</span></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{ route('home') }}">Accueil</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dossiers <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-header">DOP</li>
                          <li><a href="{{ route('dop_cadre_agence') }}">Cadre (Agence)</a></li>
                          <li><a href="{{ route('dop_cadre_siege') }}">Cadre (Siège)</a></li>
                          <li><a href="{{ route('dop_cadre_cdm') }}">Cadre (CDM)</a></li>
                          <li><a href="{{ route('dop_etam_agence') }}">ETAM (Agence)</a></li>
                          <li><a href="{{ route('dop_etam_siege') }}">ETAM (Siège)</a></li>
                          <li><a href="{{ route('dop_ouvrier') }}">Ouvrier (Agence)</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('contact.create') }}" style="font-weight:bold;color:#880000;">Observations</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container" style="margin-top: 70px;">
@yield('content')

</div>

<script type="text/javascript">
    $(function() {
        $( "#tabs" ).tabs();
    });
</script>
