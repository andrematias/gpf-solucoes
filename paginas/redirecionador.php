<?php

	$pagina =$_GET ['opcao'];
	switch ($pagina) {

		case 'servicos':
			include 'servicos.html';
			break;

		case 'galeria':
			include 'galeria.html';
			break;
		
		case 'contatos':
			include 'contatos.php';
			break;
			
		default:
			include 'home.html';
			break;
	}
?>