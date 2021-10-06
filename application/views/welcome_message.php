<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CRUD DOCENTES</title>

<style> @import url('estilos.css'); </style>


</head>
<body>


<h1>ALTAS BAJAS Y CAMBIOS DE DOCENTES </h1>


<?php 

	if (empty($listado)) {
		echo 'no existen registros!';
	}else{ ?>

<table>
<thead>
	<tr>
		<th colspan="5">Docentes Informática <a href="<?php echo base_url()?>/Welcome/agregar" class="boton">Agregar Docente</a></th>
	</tr>
	<tr>
		<th colspan="1">CI</th>
		<th colspan="1">Nomnbre</th>
		<th colspan="1">Materia</th>
		<th colspan="1"></th>
		<th colspan="1"></th>
	</tr>	
</thead>
<tbody>
<?php		foreach($listado as $docentes)
		{ ?>

		<tr>	
		<td>	
			 <?php echo $docentes->doc_ci ?>
		</td>
		<td>	
			 <?php echo $docentes->doc_nombre ?>
		</td>
		<td>
			 <?php echo $docentes->doc_sigla ?>
		</td>
		<td>
		<i class="material-icons button edit"><a href="<?php echo base_url()?>/Welcome/editar/<?php echo $docentes->doc_ci ?>">Editar</a></i>
		</td>
		<td>
		<i class="material-icons button delete"><a href="<?php echo base_url()?>/Welcome/eliminar/<?php echo $docentes->doc_ci ?>">Eliminar</a></i>
		</td>
		</tr>

		
<?php

		} ?>

</tbody>
</table>

<?php	}


?>


</body>
</html>