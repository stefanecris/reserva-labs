<?php

    header("Content-Type: application/json");

    $data = file_get_contents("php://input");

    $reclamacaoObj = json_decode($data);

    include_once("reclamacaoAluno.php");

    insereReclamacaoAluno($reclamacaoObj->id, $reclamacaoObj->lab, $reclamacaoObj->data, $reclamacaoObj->descricao);

?>