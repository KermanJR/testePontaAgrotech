<html lang="pt-br" dir="ltr">
<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    <title>Administração</title>
    <link rel="stylesheet" href="./estilos/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="main-div">
        <div class="row">
        <?php
        if(!isset($_SESSION)){
            session_start();
        }
        if(!empty($_SESSION['tipo'])){
            if($_SESSION['tipo'] == 1){
        ?>
        <aside class="col-12 col-md-2 p-0 " id="menu-lateral" style="background-color: #000">
        <nav class="navbar navbar-expand-xl navbar-dark  flex-md-column flex-row align-items-start sticky-top">
            <ul class="flex-md-column navbar-nav justify-content-between">
                <a class="navbar-brand" href="<?php echo BASEURL; ?>"><i class='fas fa-home' style='font-size:36px'></i></a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle nav-text" href="#" id="navbardrop" data-toggle="dropdown"> <?php  echo "Olá, ".$_SESSION['nome']; ?> </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="?page=logout">Realizar Logout</a>
                        </div>
                    </li>
                <br>
            </ul>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbarAdmin">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse sticky-top" id="collapsibleNavbarAdmin">
            <ul class="flex-md-column navbar-nav justify-content-between">
                <a href="" class="nav-link ">
                    <h5>Administradores</h5>
                </a>
                </li>

                <a href="?page=Atividades" class="nav-link ">
                    <h5>Atividades</h5>
                </a>
                </li>

                <a href="?page=certificados" class="nav-link ">
                <h5>Certificados</h5>
                </a>
                </li>

                <a href="?page=eventos" class="nav-link" class="nav-link ">
                <h5>Eventos</h5>
                </a>
                </li>

                <a href="?page=Palestrantes" class="nav-link" class="nav-link ">
                <h5>Palestrantes</h5>
                </a>
                </li>

                <a href="?page=Salas" class="nav-link ">
                <h5>Salas</h5>
                </a>
                </li>

                <a href="?page=Turmas" class="nav-link ">
                <h5>Turmas</h5>
                </a>
                </li>

                <a href="?page=Turnos" class="nav-link ">
                <h5>Turnos</h5>
                </a>
                </li>
                <li class="nav-item" >
                <a href="?page=Usuarios" class="nav-link">
                <h5>Usuários</h5>
                </a>
                </li>
            </ul>
        </div>
    </nav>
</aside>
<?php
}
}
?>
<!-- lista faixa amarela  style="background-color: #f4b413"-->
<main class="col" style="border: none; height: auto">
    <div class="header-container">
        <div class="header-content">
            <img src="imagens/logo-branco.png" class="header-logo">
            <div class="header-text-wrap">
                <p class="header-text">A mais nova<br><span class="green-text">Feira de Agronegócios</span><br>do país!</p>
                <p class="header-text">De <span class="green-text">05 a 08</span> de Maio </p>
            </div>
        </div>
    </div>
<div class="main-nav-container">
    <nav class="main-nav">
        <div class="pode-colapsar">
            <div class="nav-list">
                <?php
                if(empty($_SESSION['usuario'])){
                ?>
                    <div class="main-nav-item"><a class="main-nav-link" href="?">Apresentação</a></div>
                    <div class="main-nav-item"><a class="main-nav-link" href="?page=programacao">Programação</a></div>
                    <div class="main-nav-item"><a class="main-nav-link" href="?page=login">Login</a></div>
                    <div class="main-nav-item"><a class="main-nav-link" href="?page=cpf">Inscrever-se</a></div>
                <?php
                }else{
                ?>
                    <div class="main-nav-item"><a class="main-nav-link" href="?">Apresentação</a></div>
                    <div class="main-nav-item"><a class="main-nav-link" href="?page=programacao">Programação</a></div>
                    <div class="main-nav-item"><a class="main-nav-link" href="?page=participante">Área do Participante</a></div>
                    <div class="main-nav-item"><a class="main-nav-link" href="?page=logout">Sair (<?php echo $_SESSION['nome']?>)</a></div>
                <?php
                }
                ?>   
            </div>
        </div>
    </nav>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
