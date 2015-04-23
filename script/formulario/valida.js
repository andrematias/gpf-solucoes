//FUNÇÃO VERIFICA SE É UM NUMERO
function IsNum(v)

{
   var ValidChars = "0123456789";
   var IsNumber=true;
   var Char;

 
   for (i = 0; i < v.length && IsNumber == true; i++) 
      { 
      Char = v.charAt(i); 
      if (ValidChars.indexOf(Char) == -1) 
         {
         IsNumber = false;
         }
      }
   return IsNumber;
   
}

//FUNÇÃO VALIDA NOME, EMAIL, ASSUNTO E MENSAGEM
function valida(form){
//VALIDAÇÃO DO NOME
	if (form.nome.value=="") {
		alert("Preencha o nome corretamente.");
		form.nome.focus();
		return false;
	}
	//VALIDA EMAIL
	//CRIA REGRA PARA O PADRÃO DE EMAIL (CONTATO@DOMINIO.COM)
	var filtro_mail = /^.+@.+\..{2,3}$/
	if (!filtro_mail.test(form.email.value) || form.email.value=="") {
		alert("Preencha o e-mail corretamente.");
		form.email.focus();
		return false;
	}

	//VALIDA ASSUNTO
	//VERIFICA SE O ASSUNTO FOI PREENCHIDO
	if (form.assunto.value == "") {
		alert("Por favor adicione um assunto.");
		form.assunto.focus();
		return false;	
	}

	//VALIDA MENSAGEM
	//VERIFICA SE O MENSAGEM FOI PREENCHIDO
	if (form.mensagem.value == "") {
		alert("Por favor adicione uma mensagem.");
		form.mensagem.focus();
		return false;	
	}
}

//FUNÇÃO PARA VALIDAR TELEFONE
function telefone(f){
	//condição para verificar se é um numero
	if (!IsNum(f.tel.value)) {
		alert("Preencha o telefone corretamente somente numeros.");
		f.tel.focus();
	};
	//condição para verificar se não passa de 11 caracteres
	if (f.tel.value.length< 10 || f.tel.value.length > 11){
		alert("Preencha o telefone corretamente.");
		f.tel.focus();
	}else{
		//pega os dois primeiros numeros do DDD
		ddd = f.tel.value.substring(0,2);
		//Função para separar as partes do telefone de 10 numeros (fixo) após o ddd
		if (f.tel.value.length==10) {
			//primeira parte do telefone 
			part1 = f.tel.value.substring(2,6);
			//segunda parte do telefone
			part2 = f.tel.value.substring(6,10);
		}

		//Função para separar as partes do telefone de 11 numeros (Celular) após o ddd
		if (f.tel.value.length==11) {
			//primeira parte do telefone 
			part1 = f.tel.value.substring(2,7);
			//segunda parte do telefone
			part2 = f.tel.value.substring(7,11);
		}
	//montando o padrão do telefone juntando as partes (ddd)xxxx-xxxx
	f.tel.value = "("+ddd+") "+part1+"-"+part2
	}
}