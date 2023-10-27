<?php
    include("jesuita.php");
    include("..../config/conexion.php");

    $id = $_POST["id"];
    
    $crud = new Jesuita($host, $username, $passwd, $bdname);
    echo $crud->borrar($id)
?>