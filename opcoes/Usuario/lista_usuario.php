<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<?php
 require_once ABSPATH.'controle/usuarios.php';
 require_once ABSPATH.'opcoes/Usuario/gridUsuarios.php';

?>
<h1 class="text-center">Participantes (Total: <?php echo total();?>)</h1>

<div class="text-right h2">
				<a class="btn btn-primary" href="?page=usuario_add"><i class="fa fa-plus"></i> Novo usuário</a>
				<a class="btn btn-default" href="?page=Usuarios"><i class="fa fa-refresh"></i> Atualizar</a>
			</div>
<div class="row border border-white rounded">

<table class="table table-hover">
		<thead>
			<tr>
				<th>Id</th>
				<th>Nome</th>
				<th>Cpf</th>
				<th>E-mail</th>
				<th>Instituição</th>
				<th>Ra</th>
        <th>Opções</th>
			</tr>
		</thead>
		<tbody>

<?php
	$usuarios = allUsuarios();
	echo generateGrid($usuarios);

?>

</div>