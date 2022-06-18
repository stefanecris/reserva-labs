<?php

    function abreConexao(){
        $servername = "localhost"; 
        $database = "reservalabs";
        $username = "root"; 
        $password = ""; 

        $conn = mysqli_connect($servername, $username, $password, $database);

        if(!$conn){
            die("Falha na conexão: ".mysqli_connect_error());
        }
        return $conn;
    }

?>