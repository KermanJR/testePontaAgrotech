<link href="./estilos/style.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<?php
require_once ABSPATH.'model/evento.php';

if(!empty($_POST)){
	if(!empty($_POST['nome'])){
		add();
	}
}


function add() {
  $evento = new Evento();
	$evento->setNome($_POST['nome']);
  $data = $_POST['inicio'];
  $evento->setAno(date("Y", strtotime($data)));
  $evento->setInicio($data);
  $data = $_POST['final'];
  $evento->setFinal($data);
	if($evento->salvar()>0){
		$_SESSION['message'] = "Salvo com sucesso";
		$_SESSION['type'] = 'success';
	}else{
		$_SESSION['message'] = "Erro ao Salvar";
		$_SESSION['type'] = 'danger';
	}
  header('Location: '.BASEURL.'?page=evento_add');exit;
}

function allEventos(){
	$eventos = new Evento();
	return $eventos->all('evento');
}


?>
