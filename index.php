
<!DOCTYPE html>
<html lang = "pt-br">
	<head>
		<meta content = "A GPF Soluções é especializada em Instalações de Elétrica e Hidráulica, com equipe treinada para serviços rápidos, seguros e limpos em residencias e industrias." name ="description">
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<link rel="stylesheet"  type="text/css" href="css/styles/bottom.css" />
		<meta charset = "UTF-8">
        <script src="script/jquery/jquery-vers.js"></script>
        <script src="script/scroll/animatescroll.js"></script>
        <script src="script/cycle/cycle.js"></script>
		<script src = "script/formulario/valida.js"></script>
		<script type="text/javascript" src="script/galeria/jquery.jcarousel.min.js"></script>
		<script type="text/javascript" src="script/galeria/jquery.pikachoose.min.js"></script>
		<script type="text/javascript" src="script/galeria/lib/jquery.touchwipe.min.js"></script>

		<script language="javascript">
			$(document).ready(
				function (){
					$("#pikame").PikaChoose({carousel:true,carouselOptions:{wrap:'circular'}});
				});
		</script>

		<title>GPF Soluções</title>
	</head>
	<body>
		<?php
		// RETIRANDO AS NOTIFICAÇÕES DE ERRO
		error_reporting(0);
		?>
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
						<!--Conteudo introduzido pelo css-->
					</div>

					<div id = "slide">
						<div class= "cycle-slideshow"  data-cycle-fx=scrollHorz
    data-cycle-timeout=8000>
        <div class="cycle-pager"></div>

							<img src="imagens/slides/1.jpg">
							<img src="imagens/slides/2.jpg">
							<img src="imagens/slides/3.jpg">
							<img src="imagens/slides/4.jpg">
							<img src="imagens/slides/5.jpg">
							<img src="imagens/slides/6.jpg">

						</div>
					</div>


					<div id = "sRigth">
						<!--Conteudo introduzido pelo css-->
					</div>
				</div>
			</div>
			<!--FIM DO SLIDE CLASS REGIÃO DO SLIDE-->
			<!--CLASS MENUBAR ARMAZENA LINKS DO MENU E BACKGROUND-->
			<div class = "menuBar">
				<!--LINKS PARA PAGINAS-->
				<a href='index.php'> INICIO </a>
				<a href="servicos">SERVIÇOS</a>
				<a href="galeria">GALERIA</a>
				<a href="contatos">CONTATOS</a>

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
						<a href="servicos#instalacoes-eletricas"><li>Instalações Elétricas</li></a>
						<a href="servicos#projetos-eletricos-industriais"><li>Projetos Elétricos Industriais</li></a>
						<a href="servicos#instalacao-grupo-gerador"><li>Instalações de Grupo Gerador</li></a>
						<a href="servicos#instalacoes-hidraulicas"><li>Instalações Hidráulicas</li></a>
						<a href="servicos#pabx"><li>Instalações de PABX</li></a>
						<a href="servicos#cftv"><li>Instalações de CFTV</li></a>
						<a href="servicos#instalacao-ar-condicionados"><li>Instalações de Ar Condicionado</li></a>
						<a href="servicos#instalacao-redes-estruturadas"><li>Instalações de Redes Estruturadas</li></a>
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