<?php

    header("Content-Type: application/json");

    $data = file_get_contents("php://input");

    $usuarioObj = json_decode($data);

    include_once("usuarioAluno.php");
    
    insereUsuarioAluno($usuarioObj->id, $usuarioObj->nome, $usuarioObj->email, $usuarioObj->senha, $usuarioObj->curso, $usuarioObj->periodo);

?>