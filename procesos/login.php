<?php
    session_start();
    require_once '../clases/usuario.php';

    $usuario = $_POST['usuario'];
    $password = sha1($_POST['password']);

    $user = new Usuario();

    echo $user->login($usuario, $password);
?>