<?php
    session_start();
    session_destroy();
    session_start();

    $ci = $_POST['CI'];
    $tipo = $_POST['Tipo'];
    $nombre = $_POST['Nombre'];
    $_SESSION['CI'] = $ci;
    $_SESSION['TIPO'] = $tipo;
    $_SESSION['NOMBRE']= $nombre;
    //exit(json_encode(array("msg"=>$_SESSION['CI'].$_SESSION['TIPO'])));

    ?>
