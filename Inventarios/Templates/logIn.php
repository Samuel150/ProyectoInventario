<?php
    session_start();
    session_destroy();

    session_start();
    session_set_cookie_params(0);
    $ci = $_POST['CI'];
    $password = $_POST['Contrasena'];
    $tipo = $_POST['Tipo'];

    $_SESSION['CI'] = $ci;
    $_SESSION['TIPO'] = $tipo;
    $_SESSION['CONTRASENA'] = $password;
    exit(json_encode(array("msg"=>$_SESSION['CI'].$_SESSION['TIPO'].$_SESSION['CONTRASENA'])));

?>
