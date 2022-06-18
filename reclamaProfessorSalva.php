<?php

    header("Content-Type: application/json");

    $data = file_get_contents("php://input");

    $reclamacaoObj = json_decode($data);

    include_once("reclamacaoProfessor.php");

    echo $reclamacaoObj->id;
    echo $reclamacaoObj->lab;
    echo $reclamacaoObj->data;
    echo $reclamacaoObj->descricao;
    
    insereReclamacaoProfessor($reclamacaoObj->id, $reclamacaoObj->lab, $reclamacaoObj->data, $reclamacaoObj->descricao);

    echo("TESTE TESTE TESTE TESTE");
?>