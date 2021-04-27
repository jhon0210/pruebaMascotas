<?php
	if (empty($_POST['codmasc'])){
		$errors[] = "ID está vacío.";
	} elseif (!empty($_POST['codmasc'])){
	$conexion=mysqli_connect('localhost','root','','mascotas');
	$act = mysqli_real_escape_string($conexion,(strip_tags($_POST["idact"],ENT_QUOTES)));
	$raz = mysqli_real_escape_string($conexion,(strip_tags($_POST["razaact"],ENT_QUOTES)));
  $cat = mysqli_real_escape_string($conexion,(strip_tags($_POST["catact"],ENT_QUOTES)));
	$est = mysqli_real_escape_string($conexion,(strip_tags($_POST["estact"],ENT_QUOTES)));

	$id=intval($_POST['codmasc']);
	// UPDATE data into database
    $sql = "UPDATE lismascotas SET idmascota='".$act."', raza='".$raz."'
		, categoria='".$cat."', estado='".$est."'
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
