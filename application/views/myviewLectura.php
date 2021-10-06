<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>INF 324</title>
	<style type="text/css">
	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}
	</style>
</head>
<body>
	<h1>Titulo</h1>
	Primer ejemplo Docente 
	<table>
		<tr>
			<td>CI</td>
			<td>Nombre</td>
			<td>Sigla</td>
		</tr>
	<?php
		echo $nombre." ".$apellido;
		echo '<br>';
		foreach($docentes as $docente)
		{
			//print_r( $alumno);
			echo '<tr>';
			echo '<td>'.$docente->ci.'</td>';
			echo '<td>'.$docente->nombre.'</td>';
			echo '<td>'.$docente->sigla.'</td>';
			echo '</tr>';
		}
	?>
	</table>

</body>
</html>
