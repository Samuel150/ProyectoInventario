<?php
    session_start();
    //header("Authorization: ".base64_encode($_SESSION['CI']).":".base64_encode($_SESSION['Contrasena'])."");
    session_set_cookie_params(0);
    if(!(isset($_SESSION['TIPO']))){
        header('Location: ../Pages/logIn.html');
    }

