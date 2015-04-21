<?php
	$pagina = $_GET ['opcao'];
	switch ($pagina) {
		case 'home':
			include 'home.html';
			break;

		case 'servicos':
			include 'servicos.html';
			break;

		case 'galeria':
			include 'galeria.html';
			break;
		
		case 'contatos':
			include 'contatos.html';
			break;
			
		default:
			include 'home.html';
			break;
	}
?>