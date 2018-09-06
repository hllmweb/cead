<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Proposta Currícular - Escola CEAD</title>

	
	<!--css-->
	<link rel="stylesheet" href="css/estilo.css?v=<?= time(); ?>">
	<link rel="stylesheet" href="css/componentes.css?v=<?= time(); ?>">
	<!--plugins-->
	<link rel="stylesheet" href="css/jquery.bxslider.css">
	<link rel="stylesheet" href="css/all.css">
</head>
<body>
	<div id="geral">
		<div id="inicio">
			<div class="topo">
				<div class="limite">
					<div class="logo"><a href="index"><img src="img/logo-cead.png"></a></div>
					<nav class="navegacao fade">
						<ul>
							<li><a href="index">Início</a></li>
							<li><a href="escola">A Escola</a></li>
							<li><a href="educacao-infantil">Educação Infantil</a></li>
							<li><a href="ensino-fundamental-i">Ensino Fundamental</a></li>
							<li class="com-submenu">
								<a href="#"><div class="menu-seta"><i class="fas fa-chevron-down"></i></div> Proposta</a>
								<ul>
									<li><a href="projeto-pedagogico">Projetos Pedagógico</a></li>
									<li><a href="proposta-curricular">Proposta Currículares</a></li>
								</ul>
							</li>
							<!-- <li><a href="">Eventos</a></li> -->
							<li><a href="#contato" class="para-id">Contato</a></li>
						</ul>
					</nav>
					<div class="menu-topo"><a href="#matricula" class="btn-solicitar-topo para-id"><i class="fas fa-graduation-cap"></i> Pré-Matricula</a></div>
				</div>
			</div>
		</div>
		
		<div id="pagina-titulo">
			<div class="limite">
				<h2><a href="">Proposta Currícular</a> <span></span></h2>
			</div>
		</div>

		<div id="pagina-detalhe">
			<div class="limite">
				<div class="info-esquerda">
					<div id="slide-pagina">
                        <ul>
                            <li><img src="img/judo.jpg" alt="CEAD - Educação Infantil"></li>
                            <li><img src="img/ballet.jpg" alt="CEAD - Educação Infantil"></li>
                        </ul>
					</div>
					<div class="conteudo-pagina">
						<p class="recuo">As <i>Atividades Extracurriculares</i> são fundamentais para a socialização, desenvolvimento do espírito de grupo, companheirismo e construção da personalidade. Para o desenvolvimento destas atividades, contamos com profissionais especializados, com larga experiência na modalidade específica.</p>
						<p>No mesmo turno que a criança frequenta, os pais e/ou responsáveis podem optar em matricular a criança nas aulas de ballet e judô. Tais atividades são opcionais, oferecidas por meio de Contrato Específico.</p>
					</div>
				</div>

				<div class="info-direita">
					<div class="titulo-sidebar">
						<h3>Contatos</h3>
					</div>		
					<ul class="itens-sidebar">
						<li><i class="fas fa-map-marker-alt"></i>  Rua Santa Rita, Compensa II - CEP 69.035-300, Manaus/AM</li>
						<li><i class="far fa-clock"></i> Segunda - Sexta: 7:00 am - 18:00 pm</li>
						<li><a href="mailto:contato@escolacead.com.br"><i class="fas fa-at"></i> contato@escolacead.com.br</a></li>
						<li><i class="fas fa-phone"></i>  (92) 3343-3880</li>
					</ul>
				</div>				
			</div>
		</div>
		



		<div id="matricula">
			<div class="foto-matricula"><img src="img/matricula-1.png"></div>
			<div class="info-matricula">
				<h2>Matrícula</h2>
				<p>Documentos necessários:</p>
				<h3>Do Aluno</h3>
				<ul>
					<li>Cópia do RG/ Certidão de nascimento;</li>
					<li>Transferência;</li>
					<li>Cartão de vacina para crianças de até 6 anos;</li>
					<li>2 fotos 3x4.</li>
				</ul>
				<h3>Do Responsável</h3>
				<ul>
					<li>RG</li>
					<li>CPF</li>
					<li>Comprovante de Residência</li>
				</ul>

				<div class="btn-bloco"><a href="pre_matricula" target="_blank" class="btn-solicitar">Pré-Matrícula</a></div>
			</div>
		</div>



		<div id="contato">
			<div class="limite">
				<h2>Contato</h2>
				<div class="formulario-contato" id="sucesso-contato">
					<form id="form-contato" method="POST">
						<div class="form-esquerda">
							<label for="nome">
								<input type="text" id="nome" name="nome" placeholder="Nome" required>
							</label>
							<label for="email">
								<input type="text" id="email" name="email" placeholder="E-Mail" required>
							</label>
							<label for="assunto">
								<input type="text" id="assunto" name="assunto" placeholder="Assunto" required>
							</label>
						</div>
						<div class="form-direita">
							<label for="mensagem">
								<textarea name="mensagem" id="mensagem" placeholder="Mensagem" required></textarea>
							</label>
						</div>	
						<button>Enviar</button>
					</form>
				</div>
			</div>		
		</div>

    
		<div id="informacoes">
			<div class="limite">
				<ul>
					<li><i class="fab fa-whatsapp"></i> <span>(92) 3343-3880</span></li>
          <li><i class="fab fa-whatsapp"></i> <span>(92) 99179-8804</span></li>
					<li><i class="far fa-envelope"></i> <span>contato@escolacead.com.br</span></li>
					<li><i class="fas fa-map-marker-alt"></i> <span>Rua Santa Rita, Compensa II<br> CEP 69.035-300, Manaus/AM</span></li>
				</ul>

			</div>
		</div>

		<div id="mapa"></div>
	
		<div class="rede-social">
			<ul>
				<li><a href="https://api.whatsapp.com/send?phone=5592991798804&text=Digite%20Sua%20D%C3%BAvida" class="box-whatsapp" alt="WhatsApp Escola CEAD" target="_black"><i class="fab fa-whatsapp"></i></a></li>
				<li><a href="https://www.facebook.com/cead.educacao" class="box-facebook" alt="Facebook Escola CEAD" target="_black"><i class="fab fa-facebook-f"></i></a></li>
				<li><a href="https://www.instagram.com/cead.educacao.amor/" class="box-instagram" alt="Instagram Escola CEAD" target="_black"><i class="fab fa-instagram"></i></a></li>
				<li><a href="https://www.youtube.com/channel/UCWs5wMmulgy_SFt6_Zc2Zjg" class="box-youtube" alt="Youtube Escola CEAD" target="_black"><i class="fab fa-youtube"></i></a></li>
				<li><a href="#contato" class="box-email para-id" alt="Email Escola CEAD"><i class="far fa-envelope"></i></a></li>
				<li><a href="#informacoes" class="box-localizacao para-id" alt="Localização Escola CEAD"><i class="fas fa-map-marked-alt"></i></a></li>
			</ul>
		</div>
    </div>
    
	<div class="modal" id="pre_matricula">
		<div class="modal_sair" title="Pressione 'esc' para voltar.">
			<i class="fas fa-times"></i>
		</div>
		<div class="limite">
			<div class="modal_corpo modal_logo">
				<img src="img/logo-cead.png" alt="Escola CEAD - Centro Educacional Amor Divino">
			</div>
			<div class="modal_corpo pre_matricula" style="background:#eff0f0">
				<div class="coluna_modal pre_matricula">
					<!-- <img src="img/avatar.png" alt="Avatar"> -->
					<h2>Faça a Pré-Matricula de seu Filho</h2>
					<form>
						<div class="input_box">
							<input type="text" name="nome_aluno" placeholder="Nome do Aluno">
							<div class="modal_input_icone"><i class="fas fa-user-graduate"></i></div>
						</div>
						<div class="input_box">
							<input type="text" name="nome_responsavel" placeholder="Nome do Responsável">
							<div class="modal_input_icone"><i class="fas fa-user"></i></div>
						</div>		
						<div class="input_box">
							<input type="text" name="email" placeholder="Email">
							<div class="modal_input_icone"><i class="fa fa-envelope"></i></div>
						</div>											
						<div class="input_box">
							<input type="password" name="telefone" placeholder="Telefone ou Celular">
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
	<script src="js/jquery.bxslider.js"></script>
    <script src="js/site.js?v=<? time(); ?>"></script>
    <script>
        $(document).ready(function(){
            $("#slide-pagina ul").bxSlider({
                auto: true,
                pager: false,
                slideMargin: 0,
                nextText: '<i class="fa fa-chevron-right"></i>',
                prevText: '<i class="fa fa-chevron-left"></i>'

            });
        });
    </script>
</body>
</html>