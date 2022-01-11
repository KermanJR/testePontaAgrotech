<link href="./estilos/style.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="container text-dark font-weight-bold" >
  <br>
	<div>
		<?php
			if (!empty($_SESSION['type'])) {
		?>
		<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert" style="border: none;width: 100%;">
			<button style="border-radius: 100px; width: 30px; height:30px; border: 1px solid #ccc" type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></button>
			<?php
				if(!empty($_SESSION['msgId']))
					echo $_SESSION['msgId'].'<br>';
				if(!empty($_SESSION['msgNome']))
					echo $_SESSION['msgNome'].'<br>';
				if(!empty($_SESSION['message']))
					echo $_SESSION['message'].'<br>';
			?>
		</div>

		<?php
			unset($_SESSION['type']);
			unset($_SESSION['msgId']);
			unset($_SESSION['msgNome']);
			unset($_SESSION['message']);
		?>

		<?php } ?>
	</div>
<h2 style="padding-top: 20px">Novo Usuário</h2>
	<form action="?page=usuario_save" method="post" >

	<!-- area de campos do form -->
	<hr/>	<!-- linha de separação -->
		<div class="row" style="padding-top: 10px">
			<div class="form-group col-md-10">
				<label for="nome">Nome:</label>
				<input type="text" class="form-control" name="nome" required>
			</div>
		</div>
		<div class="row" style="display: flex; align-items: ">
			<div class="form-group col-md-3">
				<label for="nome">CPF (apenas números):</label>
				<input type="text" class="form-control" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;" name="cpf" maxlength="11" required>
			</div>
			<div class="form-group col-md-7">
				<label for="nome">E-mail:</label>
				<input type="email" class="form-control"  name="email" required>
			</div>
		</div>
		<div id="actions" class="row" style="padding: 40px 0">
			<div class="col-md-12">
				<button type="submit" class="btn btn-primary">Salvar</button>
				<a href="index.php" class="btn btn-default">Voltar</a>
			</div>
		</div>
	</form>

</div>
