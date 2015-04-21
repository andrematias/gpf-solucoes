<!DOCTYPE html>
<html>
	<head>
		<!--<link rel="stylesheet" type="text/css" href="css/estilo.css">-->
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
			<form name = "FormularioDeContato" method = "post" enctype="multipart/form-data">
				<label>Nome e Sobrenome:</label></br>
				<input type = "text" name= "nome"/></br>
				<label>Tel:</label></br>
				<input type = "text" name= "tel"/></br>
				<label>E-mail:</label></br>
				<input type = "text" name= "email"/></br>
				<label>Assunto:</label></br>
				<input type = "text" name= "assunto"/></br>
				<label>Mensagem:</label></br>
				<textarea rows="10" cols="70" style="resize:none;" name="mensagem">

				</textarea> </br>
				<input type = "submit" value = "Enviar" name= "enviar" />
			</form>
		</div>
	</body>

</html>