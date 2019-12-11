<?php
    $ci = $_POST[CI];
    $tipo = $_POST[Tipo];
    header("Authorization: ".$ci.":".$tipo."");
?>
