<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="container">
	<div class="container">
		<?php
			if (!empty($_SESSION['type'])) {
		?>
		<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<?php
				if(!empty($_SESSION['message']))
					echo $_SESSION['message'].'<br>';
			?>
		</div>

		<?php
			unset($_SESSION['type']);
			unset($_SESSION['message']);
		?>

		<?php } ?>
	</div>
<h2>Novo Turma</h2>
	<form action="?page=turma_save" method="post">

	<!-- area de campos do form -->
	<hr/>	<!-- linha de separação -->
		<div class="row">
			<div class="form-group col-md-8">
				<label for="nome">Nome:</label>
				<input type="text" class="form-control" name="nome" required>
			</div>
		</div>
		<div id="actions" class="row">
			<div class="col-md-12">
				<button type="submit" class="btn btn-primary">Salvar</button>
				<a href="?page=Turmas" class="btn btn-default">Voltar</a>
			</div>
		</div>
	</form>
	<br>

</div>
