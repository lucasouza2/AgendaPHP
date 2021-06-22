<!DOCTYPE html>
<html>
<head>
	<title>Agenda | PHP e AJAX</title>

	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<section class="content">
		<div class="box_form">
			<h1>Adicione um contato</h1>
			<form id="form1">
				<label for="name">Nome</label><br>
				<input type="text" name="name" id="name"/><br><br>

				<label for="telefone">Telefone</label><br>
				<input type="text" name="telefone" id="telefone"/><br><br>

				<label for="email">E-mail</label><br>
				<input type="text" name="email" id="email"/><br><br>

				<label for="endereco">Endereço</label><br>
				<input type="text" name="endereco" id="endereco"/><br><br>

				<input type="submit" form="form1" class="btn-sub" value="Salvar o contato"/><br><br>
			</form>
		</div>
		<div class ="telaEditar">
			<div class="box_form_editar">
				<h1>Editar contatos</h1>
				<form id="form1_editar">
					<label for="name">Nome</label><br>
					<input type="text" name="name" id="name_editar"/><br><br>

					<label for="telefone">Telefone</label><br>
					<input type="text" name="telefone" id="telefone_editar"/><br><br>

					<label for="email">E-mail</label><br>
					<input type="text" name="email" id="email_editar"/><br><br>

					<label for="endereco">Endereço</label><br>
					<input type="text" name="endereco" id="endereco_editar"/><br><br>

					<input type="submit" form="form1" class="btn-sub" value="Salvar o contato"/><br><br>
				</form>
			</div>
		</div>
		<div class="box_comment"> <!-- lista de contato -->
			
		</div>
	</section>
	
	<script src="assets/js/jQuery/jquery-3.5.1.min.js"></script>
	<script src="assets/js/script.js"></script>
</body>
</html>