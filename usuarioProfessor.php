<?php

    include_once("conecta.php");

    function retornaUsuarioProfessor(){
        $sql = "SELECT * FROM usuario_professor ORDER BY nome";
        $conexao = abreConexao();
        $resultado = $conexao->query($sql);
        $conexao->close();
        if(mysqli_num_rows($resultado) > 0){
            while($row = mysqli_fetch_array($resultado)){
                $usuarioProfessor[] = $row;
            }
            return $usuarioProfessor;
        }else{
            return null;
        }
    }

    function validaUsuarioProfessor($siape, $senha){
        $sql = "SELECT siape, senha FROM usuario_professor WHERE siape = '".$siape."' AND senha = '".$senha."';";
        // $sql = "SELECT siape, senha FROM usuario_professor WHERE siape = ".$siape;
        $conexao = abreConexao();
        $resultado = $conexao->query($sql);
        $conexao->close();
        if(mysqli_num_rows($resultado) > 0){
            $usuarioProfessor = mysqli_fetch_array($resultado); 
            return $usuarioProfessor;
        }else{
            return null;
        }
    }

    function retornaUsuarioProfessorPorSiape($siape){
        $sql = "SELECT siape, senha FROM usuario_professor WHERE siape = ".$siape;
        $conexao = abreConexao();
        $resultado = $conexao->query($sql);
        $conexao->close();
        if(mysqli_num_rows($resultado) > 0){
            $usuarioProfessor = mysqli_fetch_array($resultado); 
            return $usuarioProfessor;
        }else{
            return null;
        }
    }

    function insereUsuarioProfessor($siape, $nome, $email, $senha, $areaAtuacao){
        $sql = "INSERT INTO usuario_professor(siape, nome, email, senha, area_atuacao) VALUES ('$siape', '$nome', '$email', '$senha', '$areaAtuacao')";
        $conexao = abreConexao();
        $conexao->query($sql);
        $conexao->close();
    }

    function alteraUsuarioProfessor($nome, $email, $senha, $areaAtuacao){
        $sql = "UPDATE usuario_professor SET nome = '$nome', email = '$email', senha = '$senha', area_atucao = '$areaAtuacao' WHERE siape = $siape";
        $conexao = abreConexao(); 
        $conexao->query($sql);
        $conexao->close();
    }

    function redefinirSenhaProfessor($siape, $novaSenha){
        $sql = "UPDATE usuario_professor SET senha = '$novaSenha' WHERE siape = $siape";
        $conexao = abreConexao(); 
        $conexao->query($sql);
        $conexao->close();
    }

    function excluiUsuarioProfessor($siape){
        $sql = "DELETE FROM usuario_professor WHERE siape = $siape";
        $conexao = abreConexao();
        $conexao->query($sql);
        $conexao->close();
    }

?>