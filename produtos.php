<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Produtos - Barbearia Alura</title>
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/produtos.css">
	</head>
	<body>
	
		<?php require_once('header.html');?>
		
		<main><!-- CONTEÚDO PRINCIPAL -->
			<ul class="produtos">
				<li>
					<h2>Cabelo</h2>
					<img alt="" src="imagens/cabelo.png">
					<p class="produto-descricao">Na tesoura ou máquina, como o cliente preferir.</p>
					<p class="produto-preco">R$ 25,00</p>
				</li>
				
				<li>
					<h2>Barba</h2>
					<img alt="" src="imagens/barba.png">
					<p class="produto-descricao">Corte e desenho profissional de barba.</p>
					<p class="produto-preco">R$ 18,00</p>
				</li>
				
				<li>
					<h2>Cabelo & Barba</h2>
					<img alt="" src="imagens/cabelo+barba.png">
					<p class="produto-descricao">Pacote completo de cabelo e barba.</p>
					<p class="produto-preco">R$ 35,00</p>
				</li>
			</ul>
		</main>
		
		<?php require_once('footer.html');?>
		
	</body>
</html>