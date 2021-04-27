<?php

$mysqli = new mysqli("localhost","root","","mascotas");

	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}

$id_user = $_POST['id_user'];

	$queryM = "SELECT * FROM usuarios WHERE Usuario = '$id_user'";
	$resultadoM = $mysqli->query($queryM);

	//$html= "<input type='text' value='0'>";

	while($rowM = $resultadoM->fetch_assoc())
	{
		$html= $rowM['Usuario'];
    $html.='_'.$rowM['Clave'];
    $html.='_'.$rowM['Perfil'];
    $html.='_'.$rowM['Id'];

	}

	echo $html;
  //echo $html2;
 ?>
