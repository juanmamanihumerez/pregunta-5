<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CRUD DOCENTES</title>
	<style> @import url('estilos.css'); </style>
	
</head>
<body>

<h1>INSERCIONES DOCENTES</h1>

<?php

$input_doc_ci = array(
	'type'	=>	'text',
	'name'	=>	'doc_ci',
	'id'	=>	'doc_ci',
	'maxlength'	=>	'15',
	'size'	=>	'15',
	'value'	=>	set_value('doc_ci', @$datos_docentes[0]->doc_ci)

	);

$input_doc_nombre = array(
	'type'	=>	'text',
	'name'	=>	'doc_nombre',
	'id'	=>	'doc_nombre',
	'maxlength'	=>	'50',
	'size'	=>	'50',
	'value'	=>	set_value('doc_nombre', @$datos_docentes[0]->doc_nombre)

	);

$input_doc_sigla = array(
	'type'	=>	'text',
	'name'	=>	'doc_sigla',
	'id'	=>	'doc_sigla',
	'maxlength'	=>	'15',
	'size'	=>	'15',
	'value'	=>	set_value('doc_sigla', @$datos_docentes[0]->doc_sigla)

	);


?>	


<?php echo form_open();?>

<?php echo form_label('CI del docente');?><br>
<?php echo form_input($input_doc_ci);?><br>
<?php echo form_error('doc_ci');?><br>

<?php echo form_label('Nombre del docente');?><br>
<?php echo form_input($input_doc_nombre);?><br>
<?php echo form_error('doc_nombre');?><br>

<?php echo form_label('Sigla de la Materia');?><br>
<?php echo form_input($input_doc_sigla);?><br>
<?php echo form_error('doc_sigla');?><br>

<?php echo form_submit('btn_enviar','Guardar');?><br>
<?php echo form_close();?><br>


</body>
</html>