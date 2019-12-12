<?php
session_start();
session_set_cookie_params(0);
if(!isset($_SESSION['TIPO'])){
    header('Location: logIn.html');
}
?>