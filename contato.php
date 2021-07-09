<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Contato - Barbearia Alura</title>
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/contato.css">
	</head>
	<body>
	
		<?php require_once('header.html');?>
		
		<main>
			<form action="">
				<label for="nomesobrenome">Nome e Sobrenome</label>
				<input type="text" id="nomesobrenome" class="input-padrao" required>
				
				<label for="email">Email</label>
				<input type="email" id="email" class="input-padrao" required placeholder="email@dominio.com">
				
				<label for="telefone">Telefone</label>
				<input type="tel" id="telefone" class="input-padrao" required placeholder="(00) 00000-0000">
				
				<label for="mensagem">Mensagem</label>
				<textarea rows="5" cols="70" id="mensagem" class="input-padrao" required></textarea>
				
				<fieldset>
    				<legend>Como prefere o nosso contato? </legend>		
    						
    				<label for="radio-email">
    					<input type="radio" name="contato" value="email" id="radio-email">Email</label>
    				
    				<label for="radio-telefone">
    					<input type="radio" name="contato" value="telefone" id="radio-telefone">Telefone</label>
    				
    				<label for="radio-whatsapp">
    					<input type="radio" name="contato" value="whatsapp" id="radio-whatsapp" checked>Whatsapp</label>
				</fieldset>
				
				<fieldset>
    				<legend>Qual horário prefere ser atendido?</legend>
    				<select>
    					<option>Manhã</option>
    					<option>Tarde</option>
    					<option>Noite</option>
    				</select>
				</fieldset>
				
				<label><input type="checkbox" class="checkbox" checked>Gostaria de receber nossas novidades por email?</label>
				<input type="submit" value="Enviar Formulário" class="enviar">
				
			</form>
			
			<table>
				<thead>
    				<tr>
    					<th>Dia</th>
    					<th>Horário</th>
    				</tr>
				</thead>
				<tbody>
    				<tr>
    					<td>Segunda</td>
    					<td>8h ~ 20h</td>
    				</tr>
    				<tr>
    					<td>Quarta</td>
    					<td>8h ~ 20h</td>
    				</tr>
    				<tr>
    					<td>Sexta</td>
    					<td>8h ~ 20h</td>
    				</tr>
				</tbody>
			</table>
			
		</main>
		
		<?php require_once('footer.html');?>
		
	</body>
</html>