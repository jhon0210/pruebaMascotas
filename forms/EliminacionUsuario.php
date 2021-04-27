<?php
	if (empty($_POST['codmasc4'])){
		$errors[] = "Id vacío.";
	} elseif (!empty($_POST['codmasc4'])){
	$conexion=mysqli_connect('localhost','root','','mascotas');//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $id=intval($_POST['codmasc4']);


	// DELETE FROM  database
    $sql = "DELETE FROM  usuarios WHERE Id='$id'";
    $query = mysqli_query($conexion,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "El producto ha sido eliminado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la eliminación falló. Por favor, regrese y vuelva a intentarlo.";
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
