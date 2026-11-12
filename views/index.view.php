<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>BUZÓN</title>
	<link rel="stylesheet" href="<?php echo RUTA; ?>/css/index.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body>
	<header>
		<div class="contenedor">
			<div class="logo izquierda">
				<p><a href="<?php echo RUTA; ?>">BUZÓN DIGITAL ITSE</a></p>
			</div>
			<div class="derecha">

			<nav class="menu">
					<ul>
						<li>
							<a href="https://twitter.com/TecNMEscarcega"><i class="fa fa-twitter"></i></a>
						</li>
						<li>
							<a href="https://www.facebook.com/TecNMCampusEscarcega"><i class="fa fa-facebook"></i></a>
						</li>
						<li><a href="<?php echo RUTA; ?>/login.php">Iniciar Sesion<i class="icono fa fa-lock"></i></a></li>
					</ul>
				</nav>
			</div>
			
		</div>
	</header>
    <div class="contenedor">
        <h1 >INNOVACIÓN Y CALIDAD</h1>
		<br>
		<p class="txtprincipal">El objetivo de este buzón atender las Recomendaciones, Peticiones y/o Felicitaciones de Estudiantes y partes interesadas; para elevar la Calidad del Servicio Educativo del instituto, fomentando los valores del mismo</p>
		<br>
        <img src="img/jaguar.png" alt="Paris" class="center">
	</div>	
		<br>

	<div class="contenedorbotones">
		
		<a href="<?php echo RUTA; ?>/admin/nuevon.php">
        	<button class="button button2">BUZÓN</button>
        </a>
        <a href="<?php echo RUTA; ?>/consulta.php">
            <button class="button button2">CONSULTAR</button>
        </a>
	<!--	<a href="<?php echo RUTA; ?>/admin/nuevon.php">
        	<button class="button button2">PROPUESTA</button> -->
        </a>
		<br>
		<br>
    </div>
</body>
</html>