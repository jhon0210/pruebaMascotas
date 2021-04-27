  <?php
  $conexion=mysqli_connect('localhost','root','','mascotas');
  $validacion=$_POST['usuario'];
  $sqlVal="Select * from usuarios where Usuario='$validacion'";
  $resultado=mysqli_query($conexion,$sqlVal);
  if ($Registros=mysqli_fetch_array($resultado)>0) {

  	echo 3;
  }else{
    $user=$_POST['usuario'];
    $clave=$_POST['clave'];
    $perfil=$_POST['perfil'];

    $sql="INSERT into usuarios (Usuario,Clave,Perfil)
    values ('$user','$clave','$perfil')";
    $conexion->query($sql);

    if ($sql == TRUE) {
        echo 1;
    }

    $conexion->close();
}
   ?>
