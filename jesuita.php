<?php
    class crudJesuita {
        private $conexion;
    
        public function __construct($servername, $username, $password, $database) {
            $this->conexion = new mysqli($servername, $username, $password, $database);
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
            $registros = array();
    
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
            }
    
            return $row;
        }
    
        public function actualizar($id, $nombre = null, $firma = null) {
            $this->consultarUnJesuita($id);
            $sql = "UPDATE jesuita SET nombre='$nombre', firma='$firma' WHERE idJesuita='$id'";
            if ($this->conexion->query($sql) === TRUE) {
                return "Jesuita actualizado con éxito.";
            } 
        }
    
        //en un principio no haria falta borrar ningun jesuita si se orienta a como se va a hacer al final
        public function borrar($id) {
            $sql = "DELETE FROM jesuita WHERE idJesuita='$id'";
            if ($this->conexion->query($sql) === TRUE) {
                return "Jesuita eliminado con éxito.";
            }
        }
    }
?>