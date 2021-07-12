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
		<header>
    		<?php require_once('header.html');?>
		</header>
		<img class="banner" src="imagens/barbearia.jpg">
		
		
		<main class="conteudo">
		
			<section class="principal">
				<p class="descricao-barbearia">Localizada no coração da cidade a <strong>Barbearia Alura</strong> traz para o mercado o que há de melhor para o seu cabelo e barba. Fundada em 2019, a Barbearia Alura já é destaque na cidade e conquista novos clientes a cada dia.</p>
			</section>
			<div class="retangulo">
        		<div class="quadrado">
        			<img src="imagens/beneficios.jpg">
        		</div>
			</div>
    		
			<img alt="Tesoura" src="imagens/tesoura.png" class="imagemtesoura">
    		<div class="missao">
    			<p id="missao" class="descricao-barbearia"><em><strong>"Proporcionamos auto-estima e qualidade de vida aos clientes"</strong>.</em></p>
    		</div>
    		
    		<div class="conteudo">
    			<section class="principal">		
    				<p class="descricao-barbearia">Profissionais experientes e antenados às mudanças no mundo da moda. O atendimento possui padrão de excelência e agilidade, garantindo qualidade e satisfação dos nossos clientes.</p>
    			</section>
    			
    			<div class="beneficios">
    				<ul class="beneficios-itens">
    					<li class="itens">Atendimento aos Clientes</li>
    					<li class="itens">Espaço Diferenciado</li>
    					<li class="itens">Estacionamento</li>
    					<li class="itens">Profissionais Qualificados</li>
    				</ul>
    				<img src="imagens/beneficios.jpg" class="imagembeneficios">
    			</div>
    			
			</div>
			
		</main>
		<?php require_once('footer.html');?>
	</body>
</html>