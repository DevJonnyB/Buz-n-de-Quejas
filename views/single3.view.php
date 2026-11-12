<?php require 'header.php' ?>
<h2 class="contenedorbotones"></h2>
	<div class="contenedor">
		<section class="post">
      
			<article>
				<h2 class="titulo">Folio:<?php echo $post['id'] ?></h2>
				<p class="fecha"><p class="fecha">Fecha de ultima actualización: <?php echo fecha($post['fecha']); ?></p></p>
				<p class="extracto"><b>Nombre: </b><?php echo nl2br($post['nombre']); ?></p>
				<p class="extracto"><b>Correo: </b><?php echo nl2br($post['correo']); ?></p>
				<p class="extracto"><b>Estudiante: </b><?php echo nl2br($post['estudiante']); ?></p>
				<p class="extracto"><b>Telefono: </b><?php echo nl2br($post['telefono']); ?></p>
				<p class="extracto"><b>Matricula: </b><?php echo nl2br($post['n_control']); ?></p>
				<p class="extracto"><b>Carrera: </b><?php echo nl2br($post['carrera']); ?></p>
				<p class="extracto"><b>Semestre: </b><?php echo nl2br($post['semestre']); ?></p>
				<p class="extracto"><b>Grupo: </b><?php echo nl2br($post['grupo']); ?></p>
				<p class="extracto"><b>Turno: </b><?php echo nl2br($post['turno']); ?></p>
				<p class="extracto"><b>Aula: </b><?php echo nl2br($post['aula']); ?></p>
				<p class="extracto"><b>Recomendaciones: </b><?php echo nl2br($post['recomendaciones']); ?></p>
				<p class="extracto"><b>Peticiones: </b><?php echo nl2br($post['peticiones']); ?></p>
				<p class="extracto"><b>Felicitaciones: </b><?php echo nl2br($post['felicitaciones']); ?></p>
				<p class="extracto"><b>Estado: </b><?php echo nl2br($post['estado']); ?></p>
				<p class="extracto"><b>Respuesta: </b><?php echo nl2br($post['respuesta']); ?></p>
				<p class="extracto"><b>Fecha: </b><?php echo nl2br($post['fecha_a']); ?></p>
				<!-- Con la funcion nl2br insertamos un salto de linea antes de todas las lineas nuevas de un string. -->
			</article>
			<a href="<?php echo RUTA; ?>/admin/consulta.php" class="btn">Atras</a>
		</section>
	</div>


<?php require 'footer.php'; ?>