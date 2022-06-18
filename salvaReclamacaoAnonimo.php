<?php

    header("Content-Type: application/json");

    $data = file_get_contents("php://input");

    $reclamacaoObj = json_decode($data);
    
    echo $reclamacaoObj->lab;

    include_once("reclamacaoAnonimo.php");

    insereReclamacaoAnonimo($reclamacaoObj->lab, $reclamacaoObj->data, $reclamacaoObj->descricao);

?>