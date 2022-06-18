<?php

    header("Content-Type: application/json");

    $data = file_get_contents("php://input");

    $reclamacaoObj = json_decode($data);

    echo "Cheguei!";

    include_once("reclamacaoServidor.php");

    insereReclamacaoServidor($reclamacaoObj->id, $reclamacaoObj->lab, $reclamacaoObj->data, $reclamacaoObj->descricao);

?>