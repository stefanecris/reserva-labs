<?php

    include_once("conecta.php");

    function retornaUsuarioServidor(){
        $sql = "SELECT * FROM usuario_servidor ORDER BY nome";
        $conexao = abreConexao();
        $resultado = $conexao->query($sql);
        $conexao->close();
        if(mysqli_num_rows($resultado) > 0){
            while($row = mysqli_fetch_array($resultado)){
                $usuarioServidor[] = $row;
            }
            return $usuarioServidor;
        }else{
            return null;
        }
    }

    function validaUsuarioServidor($cpf, $senha){
        $sql = "SELECT cpf, senha FROM usuario_servidor WHERE cpf = '".$cpf."' AND senha = '".$senha."';";
        $conexao = abreConexao();
        $resultado = $conexao->query($sql);
        $conexao->close();
        if(mysqli_num_rows($resultado) > 0){
            $usuarioServidor = mysqli_fetch_array($resultado); 
            return $usuarioServidor;
        }else{
            return null;
        }
    }

    function retornaUsuarioServidorPorSiape($cpf){
        $sql = "SELECT cpf, senha FROM usuario_servidor WHERE cpf = ".$cpf;
        $conexao = abreConexao();
        $resultado = $conexao->query($sql);
        $conexao->close();
        if(mysqli_num_rows($resultado) > 0){
            $usuarioServidor = mysqli_fetch_array($resultado); 
            return $usuarioServidor;
        }else{
            return null;
        }
    }

    function insereUsuarioServidor($cpf, $nome, $email, $senha, $departamento){
        $sql = "INSERT INTO usuario_servidor(cpf, nome, email, senha, departamento) VALUES ('$cpf', '$nome', '$email', '$senha', '$departamento')";
        $conexao = abreConexao();
        $conexao->query($sql);
        $conexao->close();
    }

    function alteraUsuarioServidor($nome, $email, $senha, $departamento){
        $sql = "UPDATE usuario_servidor SET nome = '$nome', email = '$email', senha = '$senha', departamento = '$departamento' WHERE cpf = $cpf";
        $conexao = abreConexao(); 
        $conexao->query($sql);
        $conexao->close();
    }

    function redefinirSenhaServidor($cpf, $novaSenha){
        $sql = "UPDATE usuario_servidor SET senha = '$novaSenha' WHERE cpf = $cpf";
        $conexao = abreConexao(); 
        $conexao->query($sql);
        $conexao->close();
    }

    function excluiUsuarioServidor($cpf){
        $sql = "DELETE FROM usuario_servidor WHERE cpf = $cpf";
        $conexao = abreConexao();
        $conexao->query($sql);
        $conexao->close();
    }

?>