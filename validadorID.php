<?php
$mysqli = new mysqli("localhost","root","","mascotas");

	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}

$valID = $_POST['ident'];

	$queryM = "SELECT * FROM lismascotas where idmascota = '$valID'";
	$resultadoM = $mysqli->query($queryM);

	//$html= "<input type='text' value='0'>";

	while($rowM = $resultadoM->fetch_assoc())
	{
		$html= $rowM['raza'];

	}

	echo $html;

 ?>
