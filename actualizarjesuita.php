<?php
            $id = $_POST["id"];
            $nombre = $_POST["nombre"];
            $firma = $_POST["firma"];
        
            include("jesuita.php");
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "parajesuitas";

            $crud = new crudJesuita($servername, $username, $password, $database);

            $crud->actualizar($id, $nombre, $firma)

    ?>