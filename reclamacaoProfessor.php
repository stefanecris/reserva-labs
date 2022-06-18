<?php

    include_once("conecta.php");

    function retornaReclamacaoProfessor(){
        $sql = "SELECT * FROM reclamacoes WHERE siape IS NOT NULL ORDER BY nome";
        $conexao = abreConexao();
        $resultado = $conexao->query($sql);
        $conexao->close();
        if(mysqli_num_rows($resultado) > 0){
            while($row = mysqli_fetch_array($resultado)){
                $reclamacaoProfessor[] = $row;
            }
            return $reclamacaoProfessor;
        }else{
            return null;
        }
    }

    function retornaReclamacaoProfessorPorSiape($siape){
        $sql = "SELECT * FROM reclamacoes WHERE siape IS NOT NULL AND siape = ".$siape;
        $conexao = abreConexao();
        $resultado = $conexao->query($sql);
        $conexao->close();
        if(mysqli_num_rows($resultado) > 0){
            $reclamacaoProfessor = mysqli_fetch_array($resultado); 
            return $reclamacaoProfessor;
        }else{
            return null;
        }
    }

    function insereReclamacaoProfessor($siape, $lab, $data, $descricao){
        
        $sql = "INSERT INTO reclamacoes(id, lab, data_reclamacao, descricao, siape, ra, cpf) VALUES (default, '$lab', '$data', '$descricao', '$siape', null, null)";

        $conexao = abreConexao();
        $conexao->query($sql);
        $conexao->close();
    }

    function alteraReclamacaoProfessor($siape, $nome, $email, $lab, $data, $descricao){
        $sql = "UPDATE reclamacoes SET siape = $siape', nome = '$nome', email = '$email', lab = '$lab', data = '$data', descricao = '$descricao' WHERE id = $id";
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