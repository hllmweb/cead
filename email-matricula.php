<?php
	$nome_aluno			= $_POST["nome_aluno"];
	$email 				= $_POST["email"];
	$nome_responsavel 	= $_POST["nome_responsavel"];
	$telefone 			= $_POST["telefone"];

	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
	$headers .= 'To: ESCOLA CEAD - '.$nome.' <'.$email.'>' . "\r\n";
	$headers .= 'From: Pré-Matrícula CEAD <contato@escolacead.com.br>' . "\r\n";	


	$corpo = '
	<!DOCTYPE HTML>
	<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	</head>
	<body>
	<div style="width:750px">
		<div style="width:100%; background:#f5f6f6; padding:30px; font-family:sans-serif;">
			<div style="width:90%; background:#fff; border:1px solid #d7d7d7; padding:20px 20px 20px 25px; box-sizing:border-box; border-bottom:6px solid #0b1672;">
				<h1 style="font-size:25px"><div style="color:#0b1672; text-align:left; display:inline-block; width:65%;">FORMULÁRIO DE CONTATO</div> <img src="http://escolacead.com.br/img/logo-cead.png" height="60px" style="margin-left:30px; vertical-align:middle"></h1>

				<div style="width:100%; margin:auto; font-size:17px; display:inline-block; vertical-align:top;">

					<div style="padding-left:0px; color:#000;">
						<b>NOME DO ALUNO: </b>'.$nome_aluno.'
						<br> <b>NOME DO RESPONSÁVEL: </b>'.$nome_responsavel.' 
						<br> <b>E-MAIL: </b><a href="mailto:'.$email.'" target="_black" style="text-decoration:underline; color:#000; font-style:italic;">'.$email.'</a> 					
						<br> <b>TELEFONE: </b>'.$telefone.' 		
						
					</div>
					
				</div>
			</div>
			<div style="width:100%; text-align:center; padding-top:10px; color:#000;">
	      <div style="text-align:center; margin:20px 0;">
	     	<a href="https://www.facebook.com/cead.educacao" style="display:inline-block; margin-right:20px;"><img src="http://escolacead.com.br/img/email-face.png" width="22"></a>
	     	<a href="https://www.instagram.com/cead.educacao.amor/" style="display:inline-block; margin-right:20px;"><img src="http://escolacead.com.br/img/email-insta.png" width="22"></a>
	     	<a href="http://www.escolacead.com.br/" style="display:inline-block; margin-right:20px;"><img src="http://escolacead.com.br/img/email-site.png" width="22"></a>
	      </div>
				<div style="margin:0px; color:rgba(0,0,0,0.6)">Escola CEAD &copy; 2018</div>
			</div>
		</div>
	</div>
	</body>
	</html>';


	$envia = mail("contato@escolacead.com.br", "Formulário de Pré-Matrícula", $corpo, $headers);
	if($envia){
		echo "
		<div class='msg-sucesso'>
			<div class='msg-sucesso-icon'>
				<i class='far fa-smile-wink'></i>
			</div>
			Sua Pré-Matrícula foi agendada com sucesso!<br> Para concluir a matrícula de seu filho você tem 5 dias úteis para 
			comparecer a instituição de ensino com os seguintes documentos.</div>
		<div class='msg-sucesso-p'>
			
			<strong>Documentos necessários:</strong><br><br>
			<div class='msg-sucesso-aluno'>
			<i>DO ALUNO</i><br><br>
            Cópia do RG/ Certidão de nascimento;<br>
            Transferência;<br>
            Cartão de vacina para crianças de até 6 anos;<br>
            2 fotos 3x4;<br><br>
			</div>

			<div class='msg-sucesso-responsavel'>
			<i>DO RESPONSÁVEL</i><br><br>
            RG;<br>
            CPF;<br>
			Comprovante de residência;<br>
			</div>
		</div>";
	}else{
		echo "
		<div class='msg-sucesso'>
			<i class='far fa-frown-open'></i>
			Ocorreu um erro, tente novamente mais tarde.
		</div>";
	}
?>