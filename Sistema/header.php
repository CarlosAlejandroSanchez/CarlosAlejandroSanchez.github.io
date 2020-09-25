<?php 
  session_start();
echo <<<_INIT
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width,
        initial-scale=1'>
        <link rel='stylesheet' href='jquery.mobile-1.4.5.min.css'>
        <link rel='stylesheet' href='estilo.css' type='text/css'>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="styleC.css">

        <script src='javascript.js'></script>
        <script src='jquery-2.2.4.min.js'></script>
        <script src='jquery.mobile-1.4.5.min.js'></script>
_INIT;
    require_once 'functions.php';
    $userstr = 'Welcome Guest';
    if (isset($_SESSION['user'])) {
        $user     = $_SESSION['user'];
        $loggedin = TRUE;
        $userstr  = "Usuario: $user";
    }
    else $loggedin = FALSE;

echo <<<_MAIN
        <title> Social Red: $userstr</title>
    </head> 
    <body>
        <div data-role='page'>
            <div data-role='header'>
                <div id='logo' class='center' style='background-image: linear-gradient(50deg, #32caf0 50%, #c70f0f 50%);'>
                 Decoraciones el Charlie <br> Tapicería y Alfombras</div>
                <div class= 'username'>$userstr</div>
            </div>
            <div data-role='content'>
_MAIN;
    if ($loggedin) {
echo <<<_LOGGEDIN
        <div class='center'>
            <a data-role='button' data-inline='true' data-icon='home'
            data-transition="slide"
            href='members.php?view=$user'>Inicio</a>
            <a data-role='button' data-inline='true' data-icon=''
            data-transition="slide" href='tienda.php'>Servicios</a>
            <a data-role='button' data-inline='true' data-icon='user'
            data-transition="slide" href='members.php'>Miembros</a>
            <a data-role='button' data-inline='true' data-icon='heart'
            data-transition="slide" href='friends.php'>Amigos</a><br>
            <a data-role='button' data-inline='true' data-icon='mail'
            data-transition="slide" href='messages.php'>Mensajes</a>
            <a data-role='button' data-inline='true' data-icon='edit'
            data-transition="slide" href='profile.php'>Editar Perfil</a>
            <a data-role='button' data-inline='true' data-icon='action'
            data-transition="slide" href='logout.php'>Salir</a>
        </div>
    _LOGGEDIN;
    }
    else {
echo <<<_GUEST
        <div class='center'>
            <a data-role='button' data-inline='true' data-icon='home'
            data-transition='slide' href='index.php'>Inicio</a>
            <a data-role='button' data-inline='true' data-icon='plus'
            data-transition="slide" href='signup.php'>Regístrate</a>
            <a data-role='button' data-inline='true' data-icon='check'
            data-transition="slide" href='login.php'>Iniciar sesión</a>
        </div>
        <p class='info'>(You must be logged in to use this app)</p>
    _GUEST;
      }
?>