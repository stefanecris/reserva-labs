<?php

    session_start();

    header("Content-Type: application/json");

    $data = file_get_contents("php://input");

    $usuarioObj = json_decode($data);

    
    include_once("usuarioProfessor.php");
    include_once("usuarioAluno.php");
    include_once("usuarioServidor.php");

    if(strlen($usuarioObj->id) == 7){
        $login = validaUsuarioProfessor($usuarioObj->id, $usuarioObj->senha);
    }else if(strlen($usuarioObj->id) == 12){
        $login = validaUsuarioAluno($usuarioObj->id, $usuarioObj->senha);
    }else if(strlen($usuarioObj->id) == 11){
        $login = validaUsuarioServidor($usuarioObj->id, $usuarioObj->senha);
    }

    if($login == null){ 
        $_SESSION['login'] = false; 
        echo "Não logou!";
    }else{  
        $_SESSION['login'] = true;
        echo "Logou!";
    }
    exit(1); 

?>