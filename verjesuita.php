<?php
        
            include("jesuita.php");
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "parajesuitas";

            $crud = new crudJesuita($servername, $username, $password, $database);

            foreach ($crud->ver() as $indice => $fila) {
                echo $fila["idJesuita"].' | '.$fila["nombre"].' | '.$fila["firma"].'<br>';
            };
    ?>