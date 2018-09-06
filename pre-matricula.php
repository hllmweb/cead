<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Faça a Pré-Matrícula de Seu Filho na Escola CEAD</title>

	<!--css-->
	<link rel="stylesheet" href="css/estilo.css?v=<?= time(); ?>">
	<!--plugins-->
	<link rel="stylesheet" href="css/all.css">
</head>
<body>

	<div class="modal" id="pre_matricula" style="display: block;">
		<div class="modal_voltar" title="Pressione 'esc' para voltar.">
            <a href="index"><i class="fas fa-chevron-left"></i> Voltar</a> 
		</div>
		<div class="limite">
			<div class="modal_corpo modal_logo">
				<img src="img/logo-cead.png" alt="Escola CEAD - Centro Educacional Amor Divino">
			</div>
			<div class="modal_corpo pre_matricula" style="background:#eff0f0" id="sucesso-matricula">
				<div class="coluna_modal pre_matricula">
					<!-- <img src="img/avatar.png" alt="Avatar"> -->
					<h2>Faça a Pré-Matricula de seu Filho</h2>
					<form id="form-matricula" method="POST">
						<div class="input_box">
							<input type="text" name="nome_aluno" id="nome_aluno" placeholder="Nome do Aluno" required>
							<div class="modal_input_icone"><i class="fas fa-user-graduate"></i></div>
						</div>
						<div class="input_box">
							<input type="text" name="nome_responsavel" id="nome_responsavel" placeholder="Nome do Responsável" required>
							<div class="modal_input_icone"><i class="fas fa-user"></i></div>
						</div>		
						<div class="input_box">
							<input type="text" name="email" id="email" placeholder="Email" required>
							<div class="modal_input_icone"><i class="fa fa-envelope"></i></div>
						</div>											
						<div class="input_box">
							<input type="text" value="(92)" name="telefone" id="telefone" placeholder="Telefone ou Celular" required>
							<div class="modal_input_icone"><i class="fas fa-mobile-alt"></i></div>
						</div>
						<div class="bottom_form">
							<button type="submit">Enviar</button>
						</div>
					</form>

				</div>
			</div>
		</div>
    </div>
    


	<script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/jquery.mask.min.js"></script>
  <script>
	$("#telefone").mask("(00) 00000-0000", {placeholder: "(DDD) ____-____"});
    $("#form-matricula").submit(function(e){

		if($("#telefone").val() != "(92)"){
			dados = $(this).serializeArray();
			$.ajax({
				type: "POST",
				url: "email-matricula.php",
				data: dados,
				success: function(dados){
					$("#sucesso-matricula").html(dados);
				}
			});
		}else{
			alert("Preencha o campo telefone!");
		}
		

        e.preventDefault();
    });
    </script>
</body>
</html>