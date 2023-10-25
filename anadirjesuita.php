<?php
            $id = $_POST["id"];
            $nombre = $_POST["nombre"];
            $firma = $_POST["firma"];
        
            include("jesuita.php");
            include("conexion.php");

            $crud = new crudJesuita($host, $username, $passwd, $bdname);

            echo $crud->anadir($id, $nombre, $firma);

?>