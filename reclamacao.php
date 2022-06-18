<?php

include_once("conecta.php");

function retornaReclamacoes(){
    $sql = "SELECT * FROM reclamacoes ORDER BY data_reclamacao";
    $conexao = abreConexao();
    $resultado = $conexao->query($sql);
    $conexao->close();
    if(mysqli_num_rows($resultado) > 0){
        while($row = mysqli_fetch_array($resultado)){
            $reclamacoes[] = $row;
        }
        return $reclamacoes;
    }else{
        return null;
    }
}

function excluiReclamacao($id){
    $sql = "DELETE FROM reclamacoes WHERE id = $id";
    $conexao = abreConexao();
    $conexao->query($sql);
    $conexao->close();
}

?>