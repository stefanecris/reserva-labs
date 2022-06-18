<?php

    include_once("conecta.php");

    function retornaReclamacaoAluno(){
        $sql = "SELECT * FROM reclamacoes WHERE ra IS NOT NULL ORDER BY nome";
        $conexao = abreConexao();
        $resultado = $conexao->query($sql);
        $conexao->close();
        if(mysqli_num_rows($resultado) > 0){
            while($row = mysqli_fetch_array($resultado)){
                $reclamacaoAluno[] = $row;
            }
            return $reclamacaoAluno;
        }else{
            return null;
        }
    }

    function retornaReclamacaoAlunoPorRa($ra){
        $sql = "SELECT * FROM reclamacoes WHERE ra IS NOT NULL AND ra = ".$ra;
        $conexao = abreConexao();
        $resultado = $conexao->query($sql);
        $conexao->close();
        if(mysqli_num_rows($resultado) > 0){
            $reclamacaoAluno = mysqli_fetch_array($resultado); 
            return $reclamacaoAluno;
        }else{
            return null;
        }
    }

    function insereReclamacaoAluno($ra, $lab, $data, $descricao){

        $sql = "INSERT INTO reclamacoes(id, lab, data_reclamacao, descricao, siape, ra, cpf) VALUES (default, '$lab', '$data', '$descricao', null, '$ra', null)";

        $conexao = abreConexao();
        $conexao->query($sql);
        $conexao->close();
    }

    function alteraReclamacaoProfessor($ra, $nome, $email, $lab, $data, $descricao){
        $sql = "UPDATE reclamacoes SET ra = $ra', nome = '$nome', email = '$email', lab = '$lab', data = '$data', descricao = '$descricao' WHERE id = $id";
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