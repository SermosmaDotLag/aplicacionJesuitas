<?php
            $id = $_POST["id"];
        
            include("jesuita.php");
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "parajesuitas";

            $crud = new crudJesuita($servername, $username, $password, $database);

            $crud->borrar($id)
    ?>