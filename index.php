<!DOCTYPE html>
<html lang="pt-BR">
	<head>	
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Gabriel</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<style type="text/css">
			h1 {
				padding-top: 10px;
    			padding-right: 20px;
    			padding-bottom: 10px;
    			padding-left: 20px;
			}
			h2 {
				padding-top: 10px;
    			padding-right: 20px;
    			padding-bottom: 10px;
    			padding-left: 20px;
			}
			h3 {
				padding-top: 10px;
    			padding-right: 20px;
    			padding-bottom: 10px;
    			padding-left: 20px;
			}
			th, td {
    			text-align: left;
    			padding: 8px;
			}

			tr:nth-child(even){
				background-color: #f2f2f2
			}

			th {
    			background-color: #808080;
    			color: white;
			}
			
		</style>
	</head>
	<body>		
		<nav class="navbar navbar-toggleable-md navbar-inverse bg-primary">
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<a class="navbar-brand" href="#">VAGAS</a>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Home</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Cadastrar
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="?page=cadastrar-empresa">
								Empresa
							</a>
							<a class="dropdown-item" href="?page=cadastrar-vaga">
								Vaga
							</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Editar
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="?page=editar-empresa">
								Empresa
							</a>
							<a class="dropdown-item" href="?page=editar-vaga">
								Vaga
							</a>
						</div>
					</li>
				</ul>
			</div>
		</nav>
		<div class="container">
			<div class="row">
				<div class="col">
					
					<?php
						//connect db
						include("config.php");
						
						//busca as páginas internas
						switch ( @$_REQUEST["page"] )
						{
							case "cadastrar-empresa":
								include("cadastrar-empresa.php");
							break;
							case "cadastrar-vaga":
								include("cadastrar-vaga.php");
							break;
							case "salvar":
								include("salvar.php");
							break;
							case "editar-empresa":
								include("editar-empresa.php");
							break;	
							case "form-editar-empresa":
								include("form-editar-empresa.php");
							break;
							case "editar-vaga":
								include("editar-vaga.php");
							break;
							case "form-editar-vaga":
								include("form-editar-vaga.php");
							break;
							case "salvar-editar":
								include("salvar-editar.php");
							break;
							case "excluir":
								include("excluir.php");
							break;
							default:
								include("home.php");
						}
					?>

				</div>
			</div>
		</div>
		<script src="js/jquery-3.1.1.slim.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>











