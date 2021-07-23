<meta charset="UTF-8">

<?php 
	session_start();

?>
          
<?php
    include("conexion.php");
?>



<html>
    <head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=8" />
		
		<title>Informe Mibus</title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="estilos.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
		<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
		<link rel="stylesheet" href="font-awesome.css">
		<script src="main.js"></script>
		<script src="functions.js"></script>
		<title>Informe Mibus</title>
    </head>
	<style>

		body{ background-color: #A9D0F5;
		 background-image: url("/Prueba/mibus/images/cotiza.png");
		}

		 article{
			 margin-left: 100px;
			 margin-right:100px;
			 opacity:0.9;
		 }
		  div.headed{
			 margin-left: 100px;
			 margin-right:100px;
			 opacity:0.9;
		 }

		 .center {
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100px;
			
			}

			.dark {
				background-color: #3a3a3a;
				display: flex;
				height: 60px;
			}
 
	</style>


	<body>

	<div class="dark">
		<nav class="navbar navbar-dark bg-dark">
			<a class="navbar-brand">
				<img src="/Prueba/mibus/images/logo-1.png"  width="40" height="40" class="d-inline-block align-top" alt=""/>
			</a>
						
		</nav>
	</div>
	<div>

	<div style="background-color: #ffffff" class="headed">
		<h1 align="center" >Informes Mi bus </h1>

	</div>	
			
	<article id="tab2" style="background-color: #ffffff" >
	<div class="container-fluid bg">        
	<div class="row">
	<div class="col-sm-offset-1 col-sm-10"></div>        
	<div class="col-sm-offset-1 col-sm-10">
			
				
		<div class="center">
			<a href="distancias_view.php">
				<button name="perfil" id="perfil"type="button" class="btn btn-success btn-lg">
					<b>Descargar Informe de Destinos</b>
						<i class='fas fa-download'></i>
				</button>
			</a>
		</div>
		
		<div class="center">	
			<a href="transac_dia.php">
				<button name="perfil" id="perfil"type="button" class="btn btn-success btn-lg">
					<b>Descargar Informe de Transacciones Diarias</b>
						<i class='fas fa-download'></i>
				</button>
			</a>
		</div>	
	</div>
	</div>
	</div>
	</div>
	</article>
			<br /><br />
		
	</div>
	</body>
</html>
