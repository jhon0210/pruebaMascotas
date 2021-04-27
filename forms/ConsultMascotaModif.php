<?php

$mysqli = new mysqli("localhost","root","","mascotas");

	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}

$id_mascota = $_POST['id_mascota'];

	$queryM = "SELECT * FROM lismascotas WHERE idmascota = '$id_mascota'";
	$resultadoM = $mysqli->query($queryM);

	//$html= "<input type='text' value='0'>";

	while($rowM = $resultadoM->fetch_assoc())
	{
		$html= $rowM['idmascota'];
    $html.='_'.$rowM['raza'];
    $html.='_'.$rowM['categoria'];
    $html.='_'.$rowM['estado'];
    $html.='_'.$rowM['Id'];


	}

	echo $html;
  //echo $html2;
 ?>
