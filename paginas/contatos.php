<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title>Contatos</title>
	</head>
	<body>
		<h1>Contatos</h1>
		<div id= "boxLeftContato">

			<h5>Telefones: </h5> 
			<p>(011)4186 - 5099</p> 
			<p>(011)7744-6862</p>
			<h5>ID:</h5> <p>768*26958</p>
			<h5>E-mail:</h5> 
			<p>freitas@gpfsolucoes.com</p> 
			<p>paulo@gpfsolucoes.com</p>
	
		</div>

		<div id= "boxRigthContato">
			<!--FORMULARIO DE CONTATO COM VALIDADOR JS-->
			<form onsubmit="return valida(this);" name = "FormularioDeContato" method = "post" enctype="multipart/form-data">
				<!--NOME E SOBRENOME DO CLIENTE-->
				<label>Nome e Sobrenome:</label></br>
				<input type = "text" name= "nome" /> </br>

				<!--TELEFONE DO CLIENTE-->
				<label>Tel:</label></br>
				<input type = "text" name= "tel" onblur="telefone(this.form);" onFocus="javascript:this.value=''" maxlength="11"/></br>

				<!--E-MAIL DO CLIENTE-->
				<label>E-mail:</label></br>
				<input type = "text" name= "email" value = ""/></br>

				<!--ASSUNTO DA MENSAGEM-->
				<label>Assunto:</label></br>
				<input type = "text" name= "assunto"  value = ""/></br>

				<!--MESAGEM DO CLIENTE-->
				<label>Mensagem:</label></br>
				<textarea  rows="10" cols="70" style="resize:none;" name="mensagem"></textarea> </br>

				<!--BOTÃO DE ENVIO DO FORMULARIO-->
				<input type = "submit" value = "Enviar" name= "acao" />
			</form>

			<?php
			//VARIAVEL $BT REPRESENTA O BOTÃO DO FORMULARIO
				$bt = isset($_POST['acao']);
				//CONDIÇÃO DE ENVIO, SE EXIXTIR O BOTÃO ACAO E ELE TIVER O VALOR ENVIAR FAÇA
				if (isset($bt) && $bt == 'Enviar' ) {
					//CRIANDO VARIAVEIS PARA REPRESENTAR CAMPOS DO FORMULARIO E CONFIGURAÇÕES DE CABEÇALHO
					$remetente = "bitsuporte.ti@gmail.com";
					$nome      = $_POST['nome'];
					$tel       = $_POST['tel'];
					$email     = $_POST['email'];
					$headers   = "MIME-Version: 1.0";
					$headers  .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
					$headers  .= 'From: {$nome}  <{$email}>' ."\r\n";
					$assunto   = $_POST['assunto'];
					$msg       = $_POST['mensagem'];	

			
					//ENVIA EMAIL
					//FUNÇÃO DE QUEBRA DE LINHA DA MENSAGEM DO CLIENTE
					$msg = wordwrap($msg,70, "<br>", true);
					//FUNÇÃO MAIL COM REMETENTE, ASSUNTO E MESAGEM DO CONTATO COM FORMAS DE CONTATO DIRETO, NOME, TELEFONE EMAIL
					mail($remetente, $assunto, 'Contatos com $nome <br>
					Telefone:$tel <br>
					E-mail: $email <br>
					Mensagem: $msg', $headers);
					echo '<script type="text/javascript">alert("Sua mensagem foi enviada com sucesso, obrigado.");</script>';
				}

			?>

		</div>
	</body>

</html>