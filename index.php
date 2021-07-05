<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Barbearia Alura</title>
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/index.css">
		<link rel="stylesheet" href="css/main.css">
	</head>

	<body>
		<?php require_once('header.html');?>
		
		<main>
		
			<img id="banner" src="imagens/barbearia.jpg">
			
			<div class="conteudo">
    			<div class="principal">
    				<h2 class="titulo-centralizado">Sobre a Barbearia Alura</h2>
    				<p class="descricao-barbearia">Localizada no coração da cidade a <strong>Barbearia Alura</strong> traz para o mercado o que há de melhor para o seu cabelo e barba. Fundada em 2019, a Barbearia Alura já é destaque na cidade e conquista novos clientes a cada dia.</p>
    				<p class="descricao-barbearia">Nossa missão é:</p>
					<p id="missao" class="descricao-barbearia"><em><strong>"Proporcionar auto-estima e qualidade de vida aos clientes"</strong>.</em></p>
    				<p class="descricao-barbearia">Oferecemos profissionais experientes e antenados às mudanças no mundo da moda. O atendimento possui padrão de excelência e agilidade, garantindo qualidade e satisfação dos nossos clientes.</p>
    			</div>
    			
    			<div class="beneficios">
    				<h2 class="titulo-centralizado">Benefícios</h2>
    				<ul class="beneficios-itens">
    					<li class="itens">Atendimento aos Clientes</li>
    					<li class="itens">Espaço Diferenciado</li>
    					<li class="itens">Localização</li>
    					<li class="itens">Profissionais Qualificados</li>
    				</ul>
    				<img src="imagens/beneficios.jpg" class="imagembeneficios">
    			</div>
    			
			</div>
		</main>
		<?php require_once('footer.html');?>
	</body>
</html>