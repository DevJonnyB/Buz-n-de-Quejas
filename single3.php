<?php session_start();
require 'admin/config.php';
require 'functions.php';

// 1.- Conectamos a la base de datos
$conexion = conexion($bd_config);
if(!$conexion){
	header('Location: ../error.php');
}

// Comprobamos si la session esta iniciada, sino, redirigimos.
comprobarSession();

$conexion = conexion($bd_config);
//$id_articulo = (int)limpiarDatos($_GET['id']);
$id_articulo = id_articulo($_GET['id']);

if (!$conexion) {
	header('Location: error.php');
}

if (empty($id_articulo)) {
	header('Location: consulta.php');
}

$post = obtener_post_por_id($conexion, $id_articulo);

if (!$post) {
	// Redirigimos al index si no hay post
	header('Location: index.php');
}

$post = $post[0];

require 'views/single3.view.php';

?>