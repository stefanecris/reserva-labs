<?php

    header("Content-Type: application/json");

    $data = file_get_contents("php://input");

    $usuarioObj = json_decode($data);

    include_once("usuarioProfessor.php");
    
    insereUsuarioProfessor($usuarioObj->id, $usuarioObj->nome, $usuarioObj->email, $usuarioObj->senha, $usuarioObj->areaAtuacao);

?>