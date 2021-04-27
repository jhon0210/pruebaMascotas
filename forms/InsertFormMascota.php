<?php
$conexion=mysqli_connect('localhost','root','','mascotas');
$validacion=$_POST['idmasc'];
$sqlVal="Select * from lismascotas where idmascota='$validacion'";
$resultado=mysqli_query($conexion,$sqlVal);
if ($Registros=mysqli_fetch_array($resultado)>0) {

	echo 3;
}else{
  $masc=$_POST['idmasc'];
  $raza=$_POST['raza'];
  $estado=$_POST['est'];
  $categ=$_POST['cat'];
  //$imagen = base64_encode(file_get_contents($_FILES['imagen']['tmp_name']));
  //$tipo = $_FILES['imagen']['type'];
  //$imagen = $_FILES['imagen']['name'];
  //$tamanio = $_FILES['imagen']['size'];
  //$subid = fopen($_FILES['imagen']['size'],'r');
  //$binariosimagen = fread($subid,$tamanio);
  //$imgContenido = addslashes(file_get_contents($imagen));


  $sql="INSERT into lismascotas (idmascota,raza,categoria,estado)
  values ('$masc','$raza','$categ','$estado')";
  $conexion->query($sql);

  if ($sql == TRUE) {
      echo 1;
  }

  $conexion->close();
}
 ?>
