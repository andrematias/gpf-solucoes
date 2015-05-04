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
if (isset ($_POST['acao'])) {
    $email_enviar = "bitsuporte.ti@gmail.com";
    $cc = "andredevelopers@gmail.com";
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];
    $headers = "From: {$email}" . "\r\n" . "Reply-To: {$email}" . "\r\n" . "Cc: {$cc}" . "\r\n" . 'X-Mailer: PHP/' . phpversion();

 
     
            mail ("$email_enviar","$assunto" , "$mensagem
            $nome
            Tel:$tel
            $email
            ", "$headers" );
             
            echo "<script>alert('Sua mensagem foi enviada com sucesso!!!')</script>";
         
    }

?>

		

		</div>
	