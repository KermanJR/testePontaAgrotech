<link href="./estilos/style.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="container text-dark font-weight-bold text-center" >
  <br>
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

    <h2  style="padding: 10px 0">INFORME O CPF (apenas números)</h2>
	<form action="?page=usuario_save" method="post">

	<!-- area de campos do form -->
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<input type="text" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;" class="form-control center" name="teste_cpf" maxlength="11" required>
			</div><!--col-md-6-->
		</div><!--row-->

        <br>

		<div id="actions" class="row" style="padding: 30px 0">
			<div class="col-md-12">
				<button type="submit" class="btn btn-primary">Enviar</button>
				<a href="index.php" class="btn btn-default">Voltar</a>
			</div><!--col-md-12-->
		</div><!--row-->

	</form><!--form-->

</div>
