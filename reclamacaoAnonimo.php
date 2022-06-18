<?php

    include_once("conecta.php");

    function retornaReclamacaoAnonimo(){
        $sql = "SELECT * FROM reclamacoes WHERE siape IS NULL AND ra IS NULL AND cpf IS NULL ORDER BY nome";
        $conexao = abreConexao();
        $resultado = $conexao->query($sql);
        $conexao->close();
        if(mysqli_num_rows($resultado) > 0){
            while($row = mysqli_fetch_array($resultado)){
                $reclamacaoServidor[] = $row;
            }
            return $reclamacaoServidor;
        }else{
            return null;
        }
    }


    function insereReclamacaoAnonimo($lab, $data, $descricao){

        $sql = "INSERT INTO reclamacoes(id, lab, data_reclamacao, descricao, siape, ra, cpf) VALUES (default, '$lab', '$data', '$descricao', null, null, null)";

        $conexao = abreConexao();
        $conexao->query($sql);
        $conexao->close();
    }

    function alteraReclamacaoProfessor($lab, $data, $descricao){
        $sql = "UPDATE reclamacoes SET lab = '$lab', data = '$data', descricao = '$descricao' WHERE id = $id";
        $conexao = abreConexao(); 
        $conexao->query($sql);
        $conexao->close();
    }

    function excluiReclamacaoProfessor($id){
        $sql = "DELETE FROM reclamacoes WHERE id = $id";
        $conexao = abreConexao();
        $conexao->query($sql);
        $conexao->close();
    }

?>