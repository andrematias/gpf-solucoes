
<!DOCTYPE html>
<html lang = "pt-br">
	<head>
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<meta charset = "UTF-8">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="scroll/animatescroll.js"></script>
		<title>GPF Soluções</title>
	</head>
	<body>
		<!--DIV CONTEINER PARA "ENCAIXOTAR O SITE"-->
		<div class= "conteiner">
			<!--CABEÇALHO DO SITE-->
			<div class = "header">
				<div id = "topo"></div>
				<a href="http://www.gpfsolucoes.com">
				<img src="imagens/logo.png" alt= "GPF Soluções" title = "GPF Soluções"/>
				</a>
			</div>
			<!--FIM DO CABEÇALHO DO SITE-->


			<!--SLIDE CLASS REGIÃO DO SLIDE BACKGROUND-->
			<div class = "slideConteiner">
			<!--SLIDE BOX REGIÃO DO SLIDE COM CAIXA DA ESQUERDA, CENTRAL E DIREITA PARA BACKGROUND INTEGRADO COM O MENU, SLIDE PROPRIO E BACKGRAUND DIREITO-->

				<div id = "slideBox">
					<div id = "sLeft">

					</div>

					<div id = "slide">

					</div>

					<div id = "sRigth">

					</div>
				</div>
			</div>
			<!--FIM DO SLIDE CLASS REGIÃO DO SLIDE-->
			<!--CLASS MENUBAR ARMAZENA LINKS DO MENU E BACKGROUND-->
			<div class = "menuBar">
				<!--LINKS PARA PAGINAS-->
				<a href='?inicio=home.html&#conteudo'> INICIO </a>
				<a href="?opcao=servicos&#conteudo">SERVIÇOS</a>
				<a href="?opcao=galeria&#conteudo">GALERIA</a>
				<a href="?opcao=contatos&#conteudo">CONTATOS</a>

			</div>
			<!--FIM DA CLASS MENUBAR ARMAZENA LINKS DO MENU E BACKGROUND-->
			<!--CORPO DO CONTEÚDO DO SITE-->
			<div class = "corpo">
				<!--CONTEÚDO DO SITE-->
				<div id = "conteudo">
					<!--CONTEÚDO DINÂMICO-->
					<?php
						require 'paginas/redirecionador.php';
					?>
				</div>
				<div id= "speedNav">
					<a href="#" onclick = "$('#topo').animatescroll({scrollSpeed:2000,easing:'easeOutBounce'});"><strong>Voltar ao Menu</strong></a>
				</div>
			</div>
			<!--CORPO DO CONTEÚDO DO SITE-->
			<!--RODAPÉ CONTEM OS LINKS E DIREITOS AUTORAIS-->
			<div class = "rodape">

				<hr>
				<p>Todos os Direitos reservados a <a href="www.gpfsolucoes.com"><strong>GPF Soluções</strong></a>, Desenvolvido por <a href="#"><strong>Bit Suporte TI</strong> </a></p>
				<div id = "boxLink1">
			
					<ul>
						<h5>Serviços</h5>
						<a href="#"><li>Instalações Elétricas</li></a>
						<a href="#"><li>Projetos Elétricos Industriais</li></a>
						<a href="#"><li>Instalações de Grupo Gerador</li></a>
						<a href="#"><li>Instalações de Cameras de Segurança</li></a>
						<a href="#"><li>Instalações Hidráulicas</li></a>
						<a href="#"><li>Instalações de PABX</li></a>
						<a href="#"><li>Instalações de CFTV</li></a>
						<a href="#"><li>Instalações de Ar Condicionado</li></a>
						<a href="#"><li>Instalações de Redes Estruturadas</li></a>
					</ul>
				</div>

				<div id = "boxLink2">
			
					<ul>
						<h5>Galeria</h5>
						<a href="#"><li>Instalações</li></a>
						<a href="#"><li>Projetos</li></a>
						<a href="#"><li>Equipe</li></a>
					</ul>
				</div>

				<div id = "boxLink3">
			
					<ul>
						<h5>Contatos</h5>
						<li>Telefones: <br>
								(011)4186 - 5099 <br>
								(011)7744-6862
						</li>
						<li>ID: 768*26958</li>
						<li>E-mail: <br>
								freitas@gpfsolucoes.com <br>
								paulo@gpfsolucoes.com
						</li>

					</ul>
				</div>
			</div>
			<!--FIM DO RODAPÉ CONTEM OS LINKS E DIREITOS AUTORAIS-->
		<!--FIM DA DIV CONTEINER PARA "ENCAIXOTAR O SITE"-->
		</div>

	</body>
</html>