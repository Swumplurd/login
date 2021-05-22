<?php
    class Conexion {
        public function conectar() {
            $servidor = 'localhost';
            $usuario = 'root';
            $password = '';
            $bd = 'usuarios';

            return $conexion = mysqli_connect($servidor, $usuario, $password, $bd);
        }
    }
?>