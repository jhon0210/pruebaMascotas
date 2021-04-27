<?php
	if (empty($_POST['codmasc3'])){
		$errors[] = "ID está vacío.";
	} elseif (!empty($_POST['codmasc3'])){
	$conexion=mysqli_connect('localhost','root','','mascotas');
	$user = mysqli_real_escape_string($conexion,(strip_tags($_POST["user"],ENT_QUOTES)));
	$clave = mysqli_real_escape_string($conexion,(strip_tags($_POST["clav"],ENT_QUOTES)));
  $perfil = mysqli_real_escape_string($conexion,(strip_tags($_POST["perf"],ENT_QUOTES)));

	$id=intval($_POST['codmasc3']);
	// UPDATE data into database
    $sql = "UPDATE usuarios SET Usuario='".$user."', Clave='".$clave."'
		, Perfil='".$perfil."'
   WHERE Id='".$id."' ";
    $query = mysqli_query($conexion,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "El producto ha sido actualizado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la actualización falló. Por favor, regrese y vuelva a intentarlo.";
    }

	} else
	{
		$errors[] = "desconocido.";
	}
if (isset($errors)){

			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong>
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
			}
			if (isset($messages)){

				?>
				<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			}
?>
