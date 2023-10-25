<?php
        
            include("jesuita.php");
            include("conexion.php");

            $crud = new crudJesuita($host, $username, $passwd, $bdname);

            foreach ($crud->ver() as $indice => $fila) {
                echo $fila["idJesuita"].' | '.$fila["nombre"].' | '.$fila["firma"].'<br>';
            };
    ?>