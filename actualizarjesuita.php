<?php

            $id = $_POST["id"];

        

            include("jesuita.php");

            include("conexion.php");



            $crud = new crudJesuita($host, $username, $passwd, $bdname);


            $crud->actualizar($id)

        

?>