<?php

    include_once("conecta.php");

    function retornaReclamacaoServidor(){
        $sql = "SELECT * FROM reclamacoes WHERE cpf IS NOT NULL ORDER BY nome";
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

    function retornaReclamacaoServidorPorCpf($cpf){
        $sql = "SELECT * FROM reclamacoes WHERE cpf IS NOT NULL AND cpf = ".$cpf;
        $conexao = abreConexao();
        $resultado = $conexao->query($sql);
        $conexao->close();
        if(mysqli_num_rows($resultado) > 0){
            $reclamacaoServidor = mysqli_fetch_array($resultado); 
            return $reclamacaoServidor;
        }else{
            return null;
        }
    }

    function insereReclamacaoServidor($cpf, $lab, $data, $descricao){

        echo "Cheguei aqui hein hein hein!";
        
        echo $cpf;
        echo $lab;
        echo $data;
        echo $descricao;

        $sql = "INSERT INTO reclamacoes(id, lab, data_reclamacao, descricao, siape, ra, cpf) VALUES (default, '$lab', '$data', '$descricao', null, null, '$cpf')";

        $conexao = abreConexao();
        $conexao->query($sql);
        $conexao->close();
    }

    function alteraReclamacaoServidor($cpf, $nome, $email, $lab, $data, $descricao){
        $sql = "UPDATE reclamacoes SET cpf = $cpf', nome = '$nome', email = '$email', lab = '$lab', data = '$data', descricao = '$descricao' WHERE cpf = $cpf";
        $conexao = abreConexao(); 
        $conexao->query($sql);
        $conexao->close();
    }

    function excluiReclamacaoServidor($id){
        $sql = "DELETE FROM reclamacoes WHERE id = $id";
        $conexao = abreConexao();
        $conexao->query($sql);
        $conexao->close();
    }

?>