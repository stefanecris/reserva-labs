<?php

    header("Content-Type: application/json");

    $data = file_get_contents("php://input");

    $usuarioObj = json_decode($data);

    include_once("usuarioProfessor.php");
    include_once("usuarioAluno.php");
    include_once("usuarioServidor.php");

    if(strlen($usuarioObj->id) == 7){
        redefinirSenhaProfessor($usuarioObj->id, $usuarioObj->senha);
    }else if(strlen($usuarioObj->id) == 12){
        redefinirSenhaAluno($usuarioObj->id, $usuarioObj->senha);
    }else if(strlen($usuarioObj->id) == 11){
        redefinirSenhaServidor($usuarioObj->id, $usuarioObj->senha);
    }

    exit(1); 
    
?>