<?php
    $ip = $_POST["ip"];
    include("../programacion/lugar.php");
    include("..../config/conexion.php");
    $lugar = new Lugar($host, $username, $passwd, $bdname);
    echo $lugar->borrarLugar($ip)
?>