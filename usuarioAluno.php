<?php

    include_once("conecta.php");

    function retornaUsuarioAluno(){
        $sql = "SELECT * FROM usuario_aluno ORDER BY nome";
        $conexao = abreConexao();
        $resultado = $conexao->query($sql);
        $conexao->close();
        if(mysqli_num_rows($resultado) > 0){
            while($row = mysqli_fetch_array($resultado)){
                $usuarioAluno[] = $row;
            }
            return $usuarioAluno;
        }else{
            return null;
        }
    }

    function validaUsuarioAluno($ra, $senha){
        $sql = "SELECT ra, senha FROM usuario_aluno WHERE ra = '".$ra."' AND senha = '".$senha."';";
        $conexao = abreConexao();
        $resultado = $conexao->query($sql);
        $conexao->close();
        if(mysqli_num_rows($resultado) > 0){
            $usuarioAluno = mysqli_fetch_array($resultado); 
            return $usuarioAluno;
        }else{
            return null;
        }
    }

    function retornaUsuarioAlunoPorSiape($ra){
        $sql = "SELECT ra, senha FROM usuario_aluno WHERE ra = ".$ra;
        $conexao = abreConexao();
        $resultado = $conexao->query($sql);
        $conexao->close();
        if(mysqli_num_rows($resultado) > 0){
            $usuarioAluno = mysqli_fetch_array($resultado); 
            return $usuarioAluno;
        }else{
            return null;
        }
    }

    function insereUsuarioAluno($ra, $nome, $email, $senha, $curso, $periodo){
        $sql = "INSERT INTO usuario_aluno(ra, nome, email, senha, curso, periodo) VALUES ('$ra', '$nome', '$email', '$senha', '$curso', '$periodo')";
        $conexao = abreConexao();
        $conexao->query($sql);
        $conexao->close();
    }

    function alteraUsuarioAluno($nome, $email, $senha, $curso, $periodo){
        $sql = "UPDATE usuario_aluno SET nome = '$nome', email = '$email', senha = '$senha', curso = '$curso', periodo = '$periodo' WHERE ra = $ra";
        $conexao = abreConexao(); 
        $conexao->query($sql);
        $conexao->close();
    }

    function redefinirSenhaAluno($ra, $novaSenha){
        $sql = "UPDATE usuario_aluno SET senha = '$novaSenha' WHERE ra = $ra";
        $conexao = abreConexao(); 
        $conexao->query($sql);
        $conexao->close();
    }

    function excluiUsuarioAluno($ra){
        $sql = "DELETE FROM usuario_aluno WHERE ra = $ra";
        $conexao = abreConexao();
        $conexao->query($sql);
        $conexao->close();
    }

?>