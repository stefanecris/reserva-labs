<?php
		include_once("reclamacao.php");
		$idreclamacao = $_GET["id"];
		excluiReclamacao($idreclamacao);	
		header("location:listaReclamacoes.php");
 ?>
