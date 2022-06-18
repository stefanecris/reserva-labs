<?php

    header("Content-Type: application/json");

    $data = file_get_contents("php://input");

    $usuarioObj = json_decode($data);

    include_once("usuarioServidor.php");
    
    insereUsuarioServidor($usuarioObj->id, $usuarioObj->nome, $usuarioObj->email, $usuarioObj->senha, $usuarioObj->departamento);

?>