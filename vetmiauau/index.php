<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>VetMiauAu</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-white" data-bs-theme="white">
  <div class="container-fluid">
    <a class="nav-link active" aria-current="page" href="index.php" style="font-size: 25px;">VetMiauAu</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Funcionários</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-funcionario">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=listar-funcionario">Listar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Clientes</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-cliente">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=listar-cliente">Listar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pets</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-pet">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=listar-pet">Listar</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-3">
	<div class="row">
		<div class="col">
			<?php

			include('config.php');

			switch(@$_REQUEST['page']) {
				case 'cadastrar-funcionario':
				include('cadastrar-funcionario.php');
				break;
				case 'listar-funcionario':
				include('listar-funcionario.php');
				break;
				case 'editar-funcionario':
				include('editar-funcionario.php');
				break;
				case 'salvar-funcionario':
				include('salvar-funcionario.php');
				break;

				case 'cadastrar-cliente':
				include('cadastrar-cliente.php');
				break;
				case 'listar-cliente':
				include('listar-cliente.php');
				break;
				case 'editar-cliente':
				include('editar-cliente.php');
				break;
				case 'salvar-cliente':
				include('salvar-cliente.php');
				break;

				case 'cadastrar-pet':
				include('cadastrar-pet.php');
				break;
				case 'listar-pet':
				include('listar-pet.php');
				break;
				case 'editar-pet':
				include('editar-pet.php');
				break;
				case 'salvar-pet':
				include('salvar-pet.php');
				break;

				default:
				?>
				<h1>Aqui seu pet é bem cuidado!</h1>
				<div class="container mt-3">
    <div id="carouselPets" class="carousel slide mt-4" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselPets" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#carouselPets" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#carouselPets" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#carouselPets" data-bs-slide-to="3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
                <img src="img/fotinha.jpg" class="d-block w-100 rounded" style="height:400px; object-fit:cover;" alt="Pet 1">
            </div>

            <div class="carousel-item" data-bs-interval="3000">
                <img src="img/fotinha2.jpg" class="d-block w-100 rounded" style="height:400px; object-fit:cover;" alt="Pet 2">
            </div>

            <div class="carousel-item" data-bs-interval="3000">
                <img src="img/fotinha3.jpg" class="d-block w-100 rounded" style="height:400px; object-fit:cover;" alt="Pet 3">
            </div>

            <div class="carousel-item" data-bs-interval="3000">
                <img src="img/fotinha4.jpg" class="d-block w-100 rounded" style="height:400px; object-fit:cover;" alt="Pet 4">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselPets" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselPets" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>

    </div>
</div>	 
<?php
			}
		?>

	</div>
</div>
</div>


<div class="text-center" style="letter-spacing: 12px;">
	<h1>🦮 🦜 🐈 🐕 🐢 🐇 🐩 🐕‍🦺 🐟</h1>
</div>

<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>