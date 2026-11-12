<?php 
require 'config.php';
require '../functions.php';

// Comprobamos si la session esta iniciada, sino, redirigimos.
//comprobarSession();

// Conectamos a la base de datos
$conexion = conexion($bd_config);
if(!$conexion){
	header('Location: ../error.php');
}

// Comprobamos si los datos han sido enviados
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$nombre = limpiarDatos($_POST['nombre']);
	$correo = limpiarDatos($_POST['correo']);
	$estudiante = limpiarDatos($_POST['estudiante']);
	$telefono = limpiarDatos($_POST['telefono']);
	$n_control = limpiarDatos($_POST['n_control']);
	$carrera = limpiarDatos($_POST['carrera']);
	$fecha_a = limpiarDatos($_POST['fecha_a']);
	// Con la funcion nl2br podemos transformar los saltos de linea en etiquetas <br>
	$recomendaciones = $_POST['recomendaciones'];
	$peticiones = $_POST['peticiones'];
	$felicitaciones = $_POST['felicitaciones'];


	// Direccion final del archivo incluyendo el nombre
	# Importante recordar que este archivo se encuentra dentro de la carpeta admin, asi que
	# tenemos que concatenar al inicio '../' para bajar a la raiz de nuestro proyecto.
	//$archivo_subido = '../' . $blog_config['carpeta_imagenes'] . $_FILES['thumb']['name'];

	// Subimos el archivo
	//move_uploaded_file($thumb, $archivo_subido);

	$statement = $conexion->prepare(
		'INSERT INTO formulario (id, nombre, correo, estudiante, telefono, n_control, carrera, semestre, grupo, turno, aula, recomendaciones, peticiones, felicitaciones, estado, respuesta, fecha_a) 
		VALUES (null, :nombre, :correo, :estudiante, :telefono, :n_control, :carrera, "Anonimo", "Anonimo", "Anonimo", "Anonimo", :recomendaciones, :peticiones, :felicitaciones, "En Espera", "Sin Respuesta por el Momento", :fecha_a)'
	);
	

	$statement->execute(array(
		':nombre' => $nombre,
		':correo' => $correo,
		':estudiante' => $estudiante,
		':telefono' => $telefono,
		':n_control' => $n_control,
		':carrera' => $carrera,
		':recomendaciones' => $recomendaciones,
		':peticiones' => $peticiones,
		':felicitaciones' => $felicitaciones,
		':fecha_a' => $fecha_a
	));
	
	$id = $conexion->lastInsertId();

	header('Location: ' . RUTA . '/single2.php?id='.$id);
}


require '../views/nuevon.view.php';

?>