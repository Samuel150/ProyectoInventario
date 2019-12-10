<?php
    $ci = $_POST["CI"];
    $tipo = $_POST["Tipo"];
    session_start();
    $_SESSION["CI"] = $ci;
    $_SESSION["Tipo"] = $tipo;

