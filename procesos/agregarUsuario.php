<?php
    require_once '../clases/usuario.php';
    
    $password = sha1($_POST['registro-password']);
    $password_confirm = sha1($_POST['registro-password-confirmacion']);
    $datos = array(
        "nombre" => $_POST['nombre'], 
        "fecha-nacimiento" => $_POST['fecha-nacimiento'], 
        "registro-email" => $_POST['registro-email'], 
        "usuario" => $_POST['usuario'], 
        "password" => $password, 
        "password-confirm" => $password_confirm
    );

    $user = new Usuario();
    echo $user->agregarUsuario($datos);
?>