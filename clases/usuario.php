<?php
    require_once 'conexion.php';

    class Usuario extends Conexion{

        public function agregarUsuario($datos){
            $conexion = Conexion::conectar();

            $sql = "INSERT INTO t_usuarios (nombre, fecha_nacimiento, email, usuario, password) VALUES (?, ?, ?, ?, ?)";
            $query = $conexion->prepare($sql);
            $query->bind_param('sssss', $datos['nombre'], $datos['fecha-nacimiento'], $datos['registro-email'], $datos['usuario'], $datos['password']);
            $success = $query->execute();
            $query->close();

            return $success;
        }
        

        public function login($usuario, $password) {
            $conexion = Conexion::conectar();

            $sql = "SELECT count(*) as exist FROM t_usuarios WHERE usuario = '$usuario' AND password = '$password'";
            $result = mysqli_query($conexion, $sql);
            $respuesta = mysqli_fetch_array($result)['exist'];

            if ($respuesta > 0) {
                $_SESSION['usuario'] = $usuario;

                $sql = "SELECT id_usuario FROM t_usuarios WHERE usuario = '$usuario' AND password = '$password'";
                $result = mysqli_query($conexion, $sql);
                $id_usuario = mysqli_fetch_row($result)[0];

                $_SESSION['id_usuario'] = $id_usuario;
                
                return 1;
            } else {
                return 0;
            }
        }
    }
?>