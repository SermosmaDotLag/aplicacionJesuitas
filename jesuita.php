<?php

    class crudJesuita {

        private $conexion;

        public function __construct($host, $username, $passwd, $bdname) {

            $this->conexion = new mysqli($host, $username, $passwd, $bdname);

        }

    

        public function anadir($id, $nombre, $firma) {

            $sql = "INSERT INTO jesuita (idJesuita, nombre, firma) VALUES ('$id', '$nombre', '$firma')";

            if ($this->conexion->query($sql) === TRUE) {

                return 'Jesuita insertado con exito';

            }

        }

    

        public function ver() {

            $sql = "SELECT idJesuita, nombre, firma FROM jesuita";

            $result = $this->conexion->query($sql);

            $registros = array();

    

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

                    $registros[] = $row;

                }

            }

    

            return $registros;

        }



        public function consultarUnJesuita($id) {

            $sql = "SELECT idJesuita, nombre, firma FROM jesuita WHERE idJesuita = '$id'";

            $result = $this->conexion->query($sql);

    

            if ($result->num_rows > 0) {

                $row = $result->fetch_assoc();

                return $row;

            }

            else{

                return 'No hay un jesuita con ese id';

            }

            

        }

    

        public function actualizar($id) {

            $resultado = $this->consultarUnJesuita($id);

            $id = $resultado['idJesuita'];

            $nombre = $resultado['nombre'];

            $firma = $resultado['firma'];

            //print_r($resultado);

            $sql = "UPDATE jesuita SET nombre='$nombre', firma='$firma' WHERE idJesuita='$id'";

            echo '

            <form action="insertarjesuitaactualizado.php">

            <label for="nombre">Nombre:</label>

            <input type="text" name="nombre" id="nombre" required value="'.$nombre.'"><br>

    

            <label for="firma">Firma:</label>

            <input type="text" name="firma" id="firma" required value="'.$firma.'"><br>

    

            <input type="submit" value="Enviar">

            </form>';

            //if ($this->conexion->query($sql) === TRUE) {

                //return "Jesuita actualizado con éxito.";

           // }

        }

    

        //en un principio no haria falta borrar ningun jesuita si se orienta a como se va a hacer al final

        public function borrar($id) {

            $sql = "DELETE FROM jesuita WHERE idJesuita='$id'";

            if ($this->conexion->query($sql) === TRUE) {

                return "Jesuita eliminado con éxito.";

            }else{

                return 'No hay un jesuita con ese identificador';

            }

        }

    }

?>