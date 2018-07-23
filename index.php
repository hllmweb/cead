<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	
	<!--css-->
	<link rel="stylesheet" href="css/estilo.css?v=<?= time(); ?>">
	<link rel="stylesheet" href="css/componentes.css?v=<?= time(); ?>">
	<!--plugins-->
	<link rel="stylesheet" href="css/jquery.bxslider.css">
	<link rel="stylesheet" href="css/all.css">
</head>
<body>
	<div id="geral">
		<header id="inicio">
			<div class="topo">
				<div class="limite">
					<div class="logo"><a href=""><img src="img/logo-cead.png"></a></div>
					<nav class="navegacao fade">
						<ul>
							<li><a href="">Início</a></li>
							<li><a href="">A Escola</a></li>
							<li class="com-submenu">
								<a href=""><div class="menu-seta"><i class="fas fa-chevron-down"></i></div> Serviços</a>
								<ul>
									<li><a href="">Educação Infantil</a></li>
									<li><a href="">Ensino Fundamental</a></li>
									<li><a href="">Item #02</a></li>
								</ul>
							</li>
							<li class="com-submenu">
								<a href=""><div class="menu-seta"><i class="fas fa-chevron-down"></i></div> Proposta</a>
								<ul>
									<li><a href="">Projetos Pedagógico</a></li>
									<li><a href="">Item #01</a></li>
									<li><a href="">Item #02</a></li>
								</ul>
							</li>
							<li><a href="">Eventos</a></li>
							<li><a href="">Contato</a></li>
							<li><a href="" class="btn-solicitar-topo piscar">Pré-Matricula</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		
		<div id="banner">
			<ul>
				<li><a href=""><img src="img/banner-1.png"></a></li>
			</ul>
		</div>
		
		<div id="servicos">
			<div class="limite">
				<ul>
					<li class="azul">
						<a href="">
							<i class="fas fa-graduation-cap"></i>
							<h2>Educação Infantil</h2>
							<p>Na Educação Infantil, nosso trabalho tem por objetivo propiciar a ampliação dos interesses e conhecimentos das crianças.</p>
						</a>
					</li>
					<li class="verde-1">
						<a href="">
							<i class="fas fa-graduation-cap"></i>
							<h2>Ensino Fundamental 1</h2>
							<p>Na Educação Infantil, nosso trabalho tem por objetivo propiciar a ampliação dos interesses e conhecimentos das crianças.</p>
						</a>	
					</li>
					<li class="verde-2">
						<a href="">
							<i class="fas fa-graduation-cap"></i>
							<h2>Projeto Pedagógico</h2>
							<p>As atividades são elaboradas com base na metodologia de ensino sócio interacionista.</p>
						</a>
					</li>
				</ul>
			</div>
		</div>


		<div id="estrutura">
			<div class="limite">
				<h2>Nossa Estrutura</h2>
			</div>
		</div>




		<div id="matricula">
			<div class="foto-matricula"><img src="img/matricula.png"></div>
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

				<div class="btn-bloco"><a href="" class="btn-solicitar">Pré-Matricula</a></div>
			</div>
		</div>
	</div>


	<div id="contato">
		<div class="limite">
			<h2>Contato</h2>
			<div class="formulario-contato" id="sucesso">
				<form id="form-contato">
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

	<section id="informacoes">
		<div class="limite">
			<ul>
				<li><i class="fab fa-whatsapp"></i> <span>(92) 3343-3880</span></li>
				<li><i class="far fa-envelope"></i> <span>contato@escolacead.com.br</span></li>
				<li><i class="fas fa-map-marker-alt"></i> <span>Rua Santa Rita, Compensa II<br> CEP 69.035-300, Manaus/AM</span></li>
			</ul>

		</div>
	</section>

	<div id="mapa"></div>
	
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/jquery.bxslider.js"></script>
	<script src="js/site.js?v=<? time(); ?>"></script>
</body>
</html>