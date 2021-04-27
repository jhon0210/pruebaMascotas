<?php
session_start();
$usuario=$_SESSION['$userPerfil2'];
$codigo=$_SESSION['$clavePerfil2'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Inner Page - Medicio Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css?update=<?php echo rand(); ?>">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<body>
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top" style="background:#0F0F23;">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center">
         Bienvenido - Encuentra tu mascota aca
      </div>
      <div class="d-flex align-items-center">
        <i class="icofont-addons"></i><a href="Login.php"> Cerrar Sesion</a>
      </div>
    </div>
  </div>


  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 id="titulo1">Registro de usuarios</h1>
        </div>
        <div class="modal-body">
          <form method="post" role="form" class="php-email-form" id="IngresoUsuarios" class="php-email-form">
            <div class="text-center container">
              <small><span>Debes diligenciar todos los campos con usuario y contraseña, y seleccionar el perfil que quieres registrar</span></small>
            </div>
            <div class="container col-md-12" style="padding: 10%;">
             <div class="form-group col-md-12">
               <label for="inlineFormInputGroup"><small>Usuario*</small></label>
               <div class="input-group mb-2">
                 <div class="input-group-prepend">
                   <div class="input-group-text bg-success"><svg class="bi bi-person-square text-white" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                     <path fill-rule="evenodd" d="M2 15v-1c0-1 1-4 6-4s6 3 6 4v1H2zm6-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                     </svg>
                  </div>
                 </div>
                 <input type="text" class="form-control form-control-sm" id="usuario" name="usuario" placeholder="Ingrese el usuario" data-rule="minlen:4" data-msg="Debe ingresar el nombre">
               <div class="validate"></div>
               </div>
             </div>
             <div class="form-group col-md-12">
               <label for="inlineFormInputGroup"><small>Contraseña*</small></label>
               <div class="input-group mb-2">
                 <div class="input-group-prepend">
                   <div class="input-group-text bg-success"><svg class="bi bi-person-square text-white" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                    <path fill-rule="evenodd" d="M2 15v-1c0-1 1-4 6-4s6 3 6 4v1H2zm6-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                   </svg>
                  </div>
                 </div>
                 <input type="password" class="form-control form-control-sm" id="clave" name="clave" placeholder="Ingrese la contraseña">
               </div>
             </div>
             <div class="form-group col-md-12">
               <label for="inlineFormInputGroup"><small>Perfil*</small></label>
                <div class="input-group mb-2">
                 <div class="input-group-prepend">
                  <div class="input-group-text bg-success"><svg class="bi bi-person-fill text-white" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                   <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                   </svg>
                </div>
               </div>
               <select type="text" class="form-control form-control-sm" id="perfil" name="perfil" id="">
                <option selected>Selecciona...</option>
                <option value="Administrador">Administrador</option>
                <option value="Vendedor">Vendedor</option>
               </select>
		           <div class="validate"></div>
               </div>
             </div>
             <div class="col-auto">
            </div>
         </div>
       </div>

          <div class="modal-footer">
            <div class="text-center" style="margin-right:20%;">
              <button type="button" class="btn btn-secondary" data-dismiss="modal"><small>Cancelar</small></button>
              <button type="submit" class="btn btn-success" id="RegUsuario"><small>Registrar Usuario</small></button>
            </div>
           </div>
        </form>
      </div>
    </div>
   </div>

    <div class="modal fade" id="myModal2">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 id="titulo1">Lista de usuarios</h1>
          </div>
          <div class="modal-body">
            <form method="post" role="form" class="php-email-form" id="ListarUsuarios" class="php-email-form">
              <div class="text-center container">
                 <small><span>Esta informacion es confidencial, y solo puede ser manipulada por el administrador de la plataforma</span></small>
              </div>
              <div class="container">
                <div id="Datos1" class="card-body" style="background:white;">
                  <table class="table table-condensed table-bordered small">
                    <thead>
                      <tr style="background:#0F0F23;color:white;">
                        <th>Usuario</th>
                        <th>Clave</th>
                        <th>Perfil</th>
                      </tr>
                    </thead>
                          <?php
                              $conexion=mysqli_connect("localhost","root","","mascotas");
                              $sql="select * from usuarios" ;
                              $resultado=mysqli_query($conexion,$sql);
                              while ($Registros=mysqli_fetch_array($resultado)) {
                                 ?>
                                 <tr>
                                     <td><?php echo $Registros['Usuario'] ?></td>
                                     <td><?php echo $Registros['Clave'] ?></td>
                                     <td><?php echo $Registros['Perfil'] ?></td>
                                 </tr>
                          <?php
                          }?>
                  </table>
                </div>
               </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="myModal3">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 id="titulo1">Actualizacion de Usuarios</h1>
              </div>
              <div class="modal-body">
                <div class="text-center container">
                  <small><span>Debes seleccionar el usuario, para acceder al formulario y poder modificar la informacion.</span></small>
                  <br>
                    <div class="modal-footer">
                    </div>
                </div>
                <form class="row g-3" id="RegistrosActUSER">
                  <div class="form-group col-md-12">
                      <div class="form-group">
                        <div class="input-group mb-2">
                          <div class="input-group-prepend">
                            <div class="input-group-text bg-success"><svg class="bi bi-person-fill text-white" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                              </svg>
                           </div>
                        </div>
                        <select type="text" class="form-control form-control-sm" id="consultaActUSER" name="consultaActUSER">
                            <option selected>Selecciona el usuario...</option>
                                     <?php
                                         $conexion=mysqli_connect('localhost','root','','mascotas');
                                         $sql1="select * from usuarios";
                                         $resultado=mysqli_query($conexion,$sql1);
                                           while ($Registros=mysqli_fetch_array($resultado)) {
                                              echo '<small><option value="'.$Registros['Usuario'].'">'.$Registros['Usuario'].'</option></small>';
                                            }
                                         ?>
                          </select>
                        </div>
                      </div>
                     <div class="col-auto text-center">
                        <button type="button" class="btn btn-success" id="ConsActFormUser"><small>Consultar</small></button>
                     </div>
                    </div>
                  </form>
                  <form method="post" role="form" class="php-email-form" id="ActUser" class="php-email-form">
                      <div class="col-auto text-center" id="inicio3">
                            <a href="#" style="color:green;" id="volverID3">Volver a Consultar</a>
                      </div>
                      <div class="container col-md-12">
                          <input type="hidden" id="codmasc3" name="codmasc3" class="form-control">
                                <div class="form-group col-md-12">
                                    <label for="inlineFormInputGroup"><small><span>Usuario*</span></small></label>
                                        <div class="input-group mb-2">
                                           <div class="input-group-prepend">
                                              <div class="input-group-text bg-success"><svg class="bi bi-person-square text-white" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                                <path fill-rule="evenodd" d="M2 15v-1c0-1 1-4 6-4s6 3 6 4v1H2zm6-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                                </svg>
                                               </div>
                                             </div>
                                             <input type="text" class="form-control form-control-sm" id="user" name="user" data-rule="minlen:4" data-msg="Debe ingresar el nombre">
                                             <div class="validate"></div>
                                           </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="inlineFormInputGroup"><small><span>Clave*</span></small></label>
                                              <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                  <div class="input-group-text bg-success"><svg class="bi bi-person-square text-white" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                                    <path fill-rule="evenodd" d="M2 15v-1c0-1 1-4 6-4s6 3 6 4v1H2zm6-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                                    </svg>
                                                  </div>
                                                </div>
                                                <input type="text" class="form-control form-control-sm" id="clav" name="clav">
                                              </div>
                                            </div>
                                      <div class="form-group col-md-12">
                                        <label for="inlineFormInputGroup"><small>Perfil*</small></label>
                                          <div class="input-group mb-2">
                                           <div class="input-group-prepend">
                                            <div class="input-group-text bg-success"><svg class="bi bi-person-fill text-white" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                              <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                              </svg>
                                            </div>
                                           </div>
                                           <input type="text" class="form-control form-control-sm" id="perf" name="perf">
                                           <div class="validate"></div>
                                          </div>
                                       </div>
                                          <div class="col-auto">
                                          </div>
                                      </div>
                                      <div class="modal-footer">
                                        <div class="text-center" style="margin-right:20%;">
                                         <button type="button" class="btn btn-secondary" data-dismiss="modal"><small>Cancelar</small></button>
                                         <button type="button" class="btn btn-success" id="actualizarUsuario"><small>Actualizar Usuario</small></button>
                                        </div>
                                       </div>
                                   </form>
                                 </div>
                              </div>
                            </div>
                        </div>


      <div class="modal fade" id="myModal4">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 id="titulo1">Registro de mascota</h1>
            </div>
            <div class="modal-body">
              <form method="post" role="form" class="php-email-form" id="IngresoMascotas" class="php-email-form">
                <div class="text-center container">
                   <small><span>Debes diligenciar todos los campos para un registro exitoso, teniendo muy en cuenta el estado, para verificar si es alta o salida</span></small>
                </div>
                <div class="container col-md-12" style="padding: 10%;">
                  <div class="form-group col-md-12">
                    <label for="inlineFormInputGroup"><small>ID*</small></label>
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                         <div class="input-group-text bg-success"><svg class="bi bi-person-square text-white" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                           <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                           <path fill-rule="evenodd" d="M2 15v-1c0-1 1-4 6-4s6 3 6 4v1H2zm6-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                           </svg>
                          </div>
                         </div>
                         <input type="text" class="form-control form-control-sm" id="idmasc" name="idmasc" placeholder="Ingrese el ID" data-rule="minlen:4" data-msg="Debe ingresar el ID">
                         <div class="validate"></div>
                       </div>
                    </div>
                    <div class="form-group col-md-12">
                      <label for="inlineFormInputGroup"><small>Raza*</small></label>
                       <div class="input-group mb-2">
                        <div class="input-group-prepend">
                         <div class="input-group-text bg-success"><svg class="bi bi-person-square text-white" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                           <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                           <path fill-rule="evenodd" d="M2 15v-1c0-1 1-4 6-4s6 3 6 4v1H2zm6-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                           </svg>
                         </div>
                       </div>
                       <input type="text" class="form-control form-control-sm" id="raza" name="raza" placeholder="Ingrese la raza">
                      </div>
                   </div>
                   <div class="form-group col-md-12">
                    <label for="inlineFormInputGroup"><small>Estado*</small></label>
                     <div class="input-group mb-2">
                      <div class="input-group-prepend">
                       <div class="input-group-text bg-success"><svg class="bi bi-person-fill text-white" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        </svg>
                       </div>
                      </div>
                      <select type="text" class="form-control form-control-sm" id="est" name="est" id="">
                        <option selected>Selecciona...</option>
                        <option value="Disponible">Disponible</option>
                        <option value="Pendiente">Pendiente</option>
                        <option value="Vendido">Vendido</option>
                      </select>
    		              <div class="validate"></div>
                    </div>
                   </div>
                   <div class="form-group col-md-12">
                     <label for="inlineFormInputGroup"><small>Categoria*</small></label>
                      <div class="input-group mb-2">
                       <div class="input-group-prepend">
                        <div class="input-group-text bg-success"><svg class="bi bi-person-fill text-white" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                          </svg>
                         </div>
                        </div>

                         <select type="text" class="form-control form-control-sm" id="cat" name="cat">
                           <option selected>Selecciona...</option>
                           <option value="Perro">Perro</option>
                           <option value="Gato">Gato</option>
                           <option value="Pez">Pez</option>
                           <option value="Conejo">Conejo</option>
                           <option value="Hanster">Hanster</option>
                         </select>
                         <div class="validate"></div>
                        </div>
                      </div>
                      <div class="col-auto">
                    </div>
                  </div>
                  </div>
                  <div class="modal-footer">
                    <div class="text-center" style="margin-right:20%;">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal"><small>Cancelar</small></button>
                      <button type="submit" class="btn btn-success" id="RegMascota"><small>Registrar Mascota</small></button>
                    </div>
                 </div>
              </form>
            </div>
          </div>
        </div>
        <div class="modal fade" id="myModal5">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 id="titulo1">Lista de Mascotas</h1>
              </div>
              <div class="modal-body">
               <div class="text-center container">
                <div class="form-check form-check-inline">
                 <input class="form-check-input" type="checkbox" id="consGen" value="General">
                 <label class="form-check-label" for="inlineCheckbox1"><small><span>Consulta General</span></small></label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="consIdent" value="ID">
                  <label class="form-check-label" for="inlineCheckbox2"><small><span>Consulta por ID</span></small></label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="consEst" value="Estado">
                  <label class="form-check-label" for="inlineCheckbox2"><small><span>Consulta por Estado</span></small></label>
                </div>
                <div class="modal-footer">
                </div>
               <br>
               <form class="row g-3" id="datosID">
                 <div class="form-group col-md-12">
                   <div class="form-group">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text bg-success"><svg class="bi bi-person-fill text-white" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                         <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                         </svg>
                       </div>
                      </div>
                      <select type="text" class="form-control form-control-sm" id="consultaID" name="consultaID">
                        <option selected>Selecciona el ID...</option>
                    <?php
                        $conexion=mysqli_connect('localhost','root','','mascotas');
                        $sql1="select * from lismascotas";
                        $resultado=mysqli_query($conexion,$sql1);
                          while ($Registros=mysqli_fetch_array($resultado)) {
                             echo '<small><option value="'.$Registros['idmascota'].'">'.$Registros['idmascota'].'</option></small>';
                           }
                        ?>
                      </select>
                   </div>
                  </div>
                  <div class="col-auto text-center">
                    <button type="button" class="btn btn-success" id="ConsID"><small>Consultar</small></button>
                  </div>
                 </div>
               </form>
               <form class="row g-3" id="datosEstado">
                 <div class="form-group col-md-12">
                   <div class="form-group">
                     <div class="input-group mb-2">
                       <div class="input-group-prepend">
                         <div class="input-group-text bg-success"><svg class="bi bi-person-fill text-white" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                          </svg>
                        </div>
                       </div>
                       <select type="text" class="form-control form-control-sm" id="consultaEstado" name="consultaEstado">
                         <option selected>Selecciona el estado...</option>
                           <option value="Disponible">Disponible</option>
                           <option value="Pendiente">Pendiente</option>
                           <option value="Vendido">Vendido</option>
                       </select>
                     <div class="validate"></div>
                     </div>
                  </div>
                  <div class="col-auto text-center">
                    <button type="button" class="btn btn-success" id="ConsEstado"><small>Consultar</small></button>
                  </div>
                 </div>
               </form>
                  <div class="text-center container"></div>
                  <div class="container" id="datos"></div>
                  <div class="container" id="datos2">  </div>
                  <div class="container" id="datos3"></div>
                 </div>
               </div>
              </div>
             </div>
            </div>
            <div class="modal fade" id="myModal6">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header" style="background:#2BB02B;">
                    <h1 id="titulo1">Actualizacion de Mascotas</h1>
                  </div>
                  <div class="modal-body">
                    <div class="text-center container">
                      <small><span>Debes Ingresar el ID de la mascota, para acceder al formulario y poder modificar la informacion.</span></small>
                        <br>
                        <div class="modal-footer"></div>
                    </div>
                    <form class="row g-3" id="RegistrosActID">
                        <div class="form-group col-md-12">
                          <div class="form-group">
                            <div class="input-group mb-2">
                              <div class="input-group-prepend">
                                <div class="input-group-text bg-success"><svg class="bi bi-person-fill text-white" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                  </svg>
                                 </div>
                               </div>
                               <select type="text" class="form-control form-control-sm" id="consultaActID" name="consultaActID">
                                  <option selected>Selecciona el ID...</option>
                                   <?php
                                       $conexion=mysqli_connect('localhost','root','','mascotas');
                                       $sql1="select * from lismascotas";
                                       $resultado=mysqli_query($conexion,$sql1);
                                         while ($Registros=mysqli_fetch_array($resultado)) {
                                            echo '<small><option value="'.$Registros['idmascota'].'">'.$Registros['idmascota'].'</option></small>';
                                          }
                                       ?>
                                 </select>
                                  </div>
                               </div>
                               <div class="col-auto text-center">
                                 <button type="button" class="btn btn-success" id="ConsActForm"><small>Consultar</small></button>
                               </div>
                              </div>
                            </form>
                            <form method="post" role="form" class="php-email-form" id="ActMasc" class="php-email-form">
                              <div class="col-auto text-center" id="inicio">
                                  <a href="#" style="color:green;" id="volverID">Volver a Consultar</a>
                              </div>
                              <div class="container col-md-12">
                                <input type="hidden" id="codmasc" name="codmasc" class="form-control">
                                  <div class="form-group col-md-12">
                                     <label for="inlineFormInputGroup"><small><span>ID*</span></small></label>
                                        <div class="input-group mb-2">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text bg-success"><svg class="bi bi-person-square text-white" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                              <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                              <path fill-rule="evenodd" d="M2 15v-1c0-1 1-4 6-4s6 3 6 4v1H2zm6-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                              </svg>
                                             </div>
                                           </div>
                                           <input type="text" class="form-control form-control-sm" id="idact" name="idact" data-rule="minlen:4" data-msg="Debe ingresar el nombre">
                                           <div class="validate"></div>
                                         </div>
                                      </div>
                                      <div class="form-group col-md-12">
                                          <label for="inlineFormInputGroup"><small><span>Raza*</span></small></label>
                                            <div class="input-group mb-2">
                                              <div class="input-group-prepend">
                                                <div class="input-group-text bg-success"><svg class="bi bi-person-square text-white" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                  <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                                  <path fill-rule="evenodd" d="M2 15v-1c0-1 1-4 6-4s6 3 6 4v1H2zm6-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                                  </svg>
                                                </div>
                                              </div>
                                              <input type="text" class="form-control form-control-sm" id="razaact" name="razaact">
                                            </div>
                                          </div>
                                    <div class="form-group col-md-12">
                                      <label for="inlineFormInputGroup"><small>Categoria*</small></label>
                                        <div class="input-group mb-2">
                                         <div class="input-group-prepend">
                                          <div class="input-group-text bg-success"><svg class="bi bi-person-fill text-white" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                            </svg>
                                          </div>
                                         </div>
                                         <input type="text" class="form-control form-control-sm" id="catact" name="catact">
                                         <div class="validate"></div>
                                        </div>
                                     </div>
                                     <div class="form-group col-md-12">
                                       <label for="inlineFormInputGroup"><small>Estado*</small></label>
                                         <div class="input-group mb-2">
                                           <div class="input-group-prepend">
                                             <div class="input-group-text bg-success"><svg class="bi bi-person-fill text-white" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                               <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                               </svg>
                                              </div>
                                             </div>
                                             <input type="text" class="form-control form-control-sm" id="estact" name="estact">
                                             <div class="validate"></div>
                                           </div>
                                        </div>
                                        <div class="col-auto">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                      <div class="text-center" style="margin-right:20%;">
                                       <button type="button" class="btn btn-secondary" data-dismiss="modal"><small>Cancelar</small></button>
                                       <button type="button" class="btn btn-success" id="actualizarMasc"><small>Actualizar Mascota</small></button>
                                      </div>
                                     </div>
                                 </form>
                               </div>
                            </div>
                          </div>
                      </div>


                      <div class="modal fade" id="myModal7">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header" style="background:#2BB02B;">
                              <h1 id="titulo1">Baja de Mascotas</h1>
                            </div>
                            <div class="modal-body">
                              <div class="text-center container">
                                <small><span>Debes Ingresar el ID de la mascota, para acceder al formulario y poder eliminar la informacion.</span></small>
                                <br>
                                <div class="modal-footer">
                                </div>
                              </div>
                              <form class="row g-3" id="RegistrosElimID">
                                <div class="form-group col-md-12">
                                  <div class="form-group">
                                     <!--<input type="text" class="form-control form-control-sm text-center" id="consultaElimID" placeholder="Ingresa el ID">-->
                                     <div class="input-group mb-2">
                                       <div class="input-group-prepend">
                                         <div class="input-group-text bg-success"><svg class="bi bi-person-fill text-white" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                          <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                          </svg>
                                        </div>
                                       </div>
                                       <select type="text" class="form-control form-control-sm" id="consultaElimID" name="consultaElimID">
                                         <option selected>Selecciona el ID...</option>
                                     <?php
                                         $conexion=mysqli_connect('localhost','root','','mascotas');
                                         $sql1="select * from lismascotas";
                                         $resultado=mysqli_query($conexion,$sql1);
                                           while ($Registros=mysqli_fetch_array($resultado)) {
                                              echo '<small><option value="'.$Registros['idmascota'].'">'.$Registros['idmascota'].'</option></small>';
                                            }
                                         ?>
                                   </select>
                                    </div>
                                 </div>
                                 <div class="col-auto text-center">
                                   <button type="button" class="btn btn-success" id="ConsElimForm"><small>Consultar</small></button>
                                 </div>
                                </div>
                              </form>
                              <form method="post" role="form" class="php-email-form" id="ElimMasc" class="php-email-form">
                                <div class="col-auto text-center" id="inicio2">
                                    <a href="#" style="color:green;" id="volverID2">Volver a Consultar</a>
                                </div>
                                <div class="container col-md-12">
                                  <input type="hidden" id="codmasc2" name="codmasc2" class="form-control">
                                    <div class="form-group col-md-12">
                                       <label for="inlineFormInputGroup"><small><span>ID*</span></small></label>
                                          <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                              <div class="input-group-text bg-success"><svg class="bi bi-person-square text-white" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                                <path fill-rule="evenodd" d="M2 15v-1c0-1 1-4 6-4s6 3 6 4v1H2zm6-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                                </svg>
                                               </div>
                                             </div>
                                             <input type="text" class="form-control form-control-sm" id="idelim" name="idelim" data-rule="minlen:4" disabled>
                                             <div class="validate"></div>
                                           </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="inlineFormInputGroup"><small><span>Raza*</span></small></label>
                                              <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                  <div class="input-group-text bg-success"><svg class="bi bi-person-square text-white" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                                    <path fill-rule="evenodd" d="M2 15v-1c0-1 1-4 6-4s6 3 6 4v1H2zm6-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                                    </svg>
                                                  </div>
                                                </div>
                                                <input type="text" class="form-control form-control-sm" id="razaelim" name="razaelim" disabled>
                                              </div>
                                            </div>
                                      <div class="form-group col-md-12">
                                        <label for="inlineFormInputGroup"><small>Categoria*</small></label>
                                          <div class="input-group mb-2">
                                           <div class="input-group-prepend">
                                            <div class="input-group-text bg-success"><svg class="bi bi-person-fill text-white" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                              <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                              </svg>
                                            </div>
                                           </div>
                                           <input type="text" class="form-control form-control-sm" id="catelim" name="catelim" disabled>
                                           <div class="validate"></div>
                                          </div>
                                       </div>
                                       <div class="form-group col-md-12">
                                         <label for="inlineFormInputGroup"><small>Estado*</small></label>
                                           <div class="input-group mb-2">
                                             <div class="input-group-prepend">
                                               <div class="input-group-text bg-success"><svg class="bi bi-person-fill text-white" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                 <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                                 </svg>
                                                </div>
                                               </div>
                                               <input type="text" class="form-control form-control-sm" id="estelim" name="estelim" disabled>
                                               <div class="validate"></div>
                                             </div>
                                          </div>
                                          <div class="col-auto">
                                          </div>
                                      </div>
                                      <div class="modal-footer">
                                        <div class="text-center" style="margin-right:20%;">
                                         <button type="button" class="btn btn-secondary" data-dismiss="modal"><small>Cancelar</small></button>
                                         <button type="button" class="btn btn-success" id="eliminarMasc"><small>Eliminar Mascota</small></button>
                                        </div>
                                       </div>
                                   </form>
                                 </div>
                              </div>
                            </div>
                        </div>

                        <div class="modal fade" id="myModal8">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header" style="background:#2BB02B;">
                                <h1 id="titulo1">Baja de Usuario</h1>
                              </div>
                              <div class="modal-body">
                                <div class="text-center container">
                                  <small><span>Debes Ingresar el ID del usuario, para acceder al formulario y poder eliminar la informacion.</span></small>
                                  <br>
                                  <div class="modal-footer">
                                  </div>
                                </div>
                                <form class="row g-3" id="RegistrosElimUSER">
                                  <div class="form-group col-md-12">
                                    <div class="form-group">
                                       <div class="input-group mb-2">
                                         <div class="input-group-prepend">
                                           <div class="input-group-text bg-success"><svg class="bi bi-person-fill text-white" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                            </svg>
                                          </div>
                                         </div>
                                         <select type="text" class="form-control form-control-sm" id="consultaElimUSER" name="consultaElimUSER">
                                           <option selected>Selecciona el usuario...</option>
                                       <?php
                                           $conexion=mysqli_connect('localhost','root','','mascotas');
                                           $sql1="select * from usuarios";
                                           $resultado=mysqli_query($conexion,$sql1);
                                             while ($Registros=mysqli_fetch_array($resultado)) {
                                                echo '<small><option value="'.$Registros['Usuario'].'">'.$Registros['Usuario'].'</option></small>';
                                              }
                                           ?>
                                     </select>
                                      </div>
                                   </div>
                                   <div class="col-auto text-center">
                                     <button type="button" class="btn btn-success" id="ConsElimFormUser"><small>Consultar</small></button>
                                   </div>
                                  </div>
                                </form>
                                <form method="post" role="form" class="php-email-form" id="ElimUser" class="php-email-form">
                                  <div class="col-auto text-center" id="inicio4">
                                      <a href="#" style="color:green;" id="volverID4">Volver a Consultar</a>
                                  </div>
                                  <div class="container col-md-12">
                                    <input type="hidden" id="codmasc4" name="codmasc4" class="form-control">
                                      <div class="form-group col-md-12">
                                         <label for="inlineFormInputGroup"><small><span>Usuario*</span></small></label>
                                            <div class="input-group mb-2">
                                              <div class="input-group-prepend">
                                                <div class="input-group-text bg-success"><svg class="bi bi-person-square text-white" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                  <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                                  <path fill-rule="evenodd" d="M2 15v-1c0-1 1-4 6-4s6 3 6 4v1H2zm6-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                                  </svg>
                                                 </div>
                                               </div>
                                               <input type="text" class="form-control form-control-sm" id="userelim" name="userelim" data-rule="minlen:4" disabled>
                                               <div class="validate"></div>
                                             </div>
                                          </div>
                                          <div class="form-group col-md-12">
                                              <label for="inlineFormInputGroup"><small><span>Clave*</span></small></label>
                                                <div class="input-group mb-2">
                                                  <div class="input-group-prepend">
                                                    <div class="input-group-text bg-success"><svg class="bi bi-person-square text-white" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                                      <path fill-rule="evenodd" d="M2 15v-1c0-1 1-4 6-4s6 3 6 4v1H2zm6-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                                      </svg>
                                                    </div>
                                                  </div>
                                                  <input type="text" class="form-control form-control-sm" id="clavelim" name="clavelim" disabled>
                                                </div>
                                              </div>
                                        <div class="form-group col-md-12">
                                          <label for="inlineFormInputGroup"><small>Perfil*</small></label>
                                            <div class="input-group mb-2">
                                             <div class="input-group-prepend">
                                              <div class="input-group-text bg-success"><svg class="bi bi-person-fill text-white" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                                </svg>
                                              </div>
                                             </div>
                                             <input type="text" class="form-control form-control-sm" id="perfelim" name="perfelim" disabled>
                                             <div class="validate"></div>
                                            </div>
                                         </div>

                                            <div class="col-auto">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                          <div class="text-center" style="margin-right:20%;">
                                           <button type="button" class="btn btn-secondary" data-dismiss="modal"><small>Cancelar</small></button>
                                           <button type="button" class="btn btn-success" id="eliminarUsuario"><small>Eliminar Usuario</small></button>
                                          </div>
                                         </div>
                                     </form>
                                   </div>
                                </div>
                              </div>
                          </div>

                          <header id="header" class="fixed-top">
                            <div class="container d-flex">

                            <nav class="nav-menu d-none d-lg-block" style="margin-left:25%;">
                              <ul>
                                <li class="Menu active"><a href="#">Menu principal</a></li>
                                <li class="tienda"><a href="#">Administracion de Mascotas</a></li>
                                <li class="perfiles"><a href="#about">Administracion de Usuarios</a></li>
                               </ul>
                             </nav>
                            </div>
                           </header>

                           <main id="main">

                             <section class="breadcrumbs" id="ModuloMascotas">
                              <div class="container">
                                <div class="text-center">
                                 <div class="text-center">
                                   <h4>Bienvenido, En este modulo podras administrar tada la informacion de las mascotas</h4>
                                 </div>
                                </div>
                              </div>
                            </section>

                            <section id="ModuloUsuarios">
                             <div class="container">
                               <div class="text-center">
                                <div class="text-center">
                                  <h4>Bienvenido, En este modulo podras administrar los usuarios y perfiles</h4>
                                </div>
                               </div>
                             </div>
                           </section>

                           <section id="ModuloMenu">
                            <div class="container">
                              <div class="text-center">
                               <div class="text-center">
                                 <h4>Bienvenido, En este modulo podras administrar los usuarios y perfiles</h4>
                               </div>
                              </div>
                            </div>
                          </section>


<img src="assets/img/Menumascota4.jpg" alt="" class="logprincipal img-fluid">
    <section id="pricing" class="pricing">

      <div class="container" data-aos="fade-up">

        <div class="adminusers row">

          <div class="col-lg-3 col-md-12">
            <div class="box col-md-12">
              <h3>Alta Usuarios</h3>
                <div class="row">
              <img src="assets/img/AlstaUsuario.png" alt="Card image cap" style="margin-left:10%;">
              <div class="card-body">
                <h5 class="card-title" style="font-weight: 500;">Registro de Usuarios</h5>
                <p class="card-text" style="text-align: justify;font-family: Arimo;font-size: 14px;">Bienvenido, en este modulo podras registrar todos los datos del nuevo usuario para que tenga acceso a la plataforma.</p>
              </div>
              </div>
              <div class="btn-wrap">
                <a href="#" class="btn-buy" data-toggle="modal" data-target="#myModal">REG. US.</a>
              </div>
            </div>

          </div>

          <div class="col-lg-3 col-md-12">
            <div class="box col-md-12">
              <h3>Lista de Usuarios</h3>
                <div class="row">
              <img src="assets/img/usuarios.png" alt="Card image cap" style="margin-left:10%;">
              <div class="card-body">
                <h5 class="card-title" style="font-weight: 500;">Lista de Usuarios</h5>
                <p class="card-text" style="text-align: justify;font-family: Arimo;font-size: 14px;">Bienvenido, en este modulo podras consultar los usuarios registrados en la base de datos, solo con perfil administrativo.</p>
              </div>
              </div>
              <div class="btn-wrap">
                <a href="#" class="btn-buy" data-toggle="modal" data-target="#myModal2">CONS. US.</a>
              </div>
            </div>

          </div>

          <div class="col-lg-3 col-md-12">
            <div class="box col-md-12">
              <h3>Actualizacion de Usuarios</h3>
                <div class="row">
              <img src="assets/img/Actusuario.png" alt="Card image cap" style="margin-left:10%;">
              <div class="card-body">
                <h5 class="card-title" style="font-weight: 500;">Actualizar Usuario</h5>
                <p class="card-text" style="text-align: justify;font-family: Arimo;font-size: 14px;">Bienvenido, en este modulo podras registrar todos los datos del nuevo usuario para que tenga acceso a la plataforma.</p>
              </div>
              </div>
              <div class="btn-wrap">
                <a href="#" class="btn-buy" data-toggle="modal" data-target="#myModal3">ACT.US.</a>
              </div>
            </div>

          </div>
          <div class="col-lg-3 col-md-12">
            <div class="box col-md-12">
              <h3>Baja de Usuarios</h3>
                <div class="row">
              <img src="assets/img/elminUsuario.png" alt="Card image cap" style="margin-left:10%;">
              <div class="card-body">
                <h5 class="card-title" style="font-weight: 500;">Eliminar Usuarios</h5>
                <p class="card-text" style="text-align: justify;font-family: Arimo;font-size: 14px;">Bienvenido, en este modulo podras registrar todos los datos del nuevo usuario para que tenga acceso a la plataforma.</p>
              </div>
              </div>
              <div class="btn-wrap">
                <a href="#" class="btn-buy" data-toggle="modal" data-target="#myModal8">ELIM.USER</a>
              </div>
            </div>

          </div>


        </div>


        <div class="modmascotas row">

          <div class="col-lg-3 col-md-12">
            <div class="box col-md-12">
              <h3>Administracion mascotas</h3>
                <div class="row">
              <img src="assets/img/mascota1.jpg" alt="Card image cap" style="margin-left:25%;">
              <div class="card-body">
                <h5 class="card-title" style="font-weight: 500;">Administrar Mascota</h5>
                <p class="card-text" style="text-align: justify;font-family: Arimo;font-size: 14px;">Bienvenido, en este modulo podras administrar toda la informacion de las mascotas, tanto la salida como la entrada.</p>
              </div>
              </div>
              <div class="btn-wrap">
                <a href="#" class="btn-buy" data-toggle="modal" data-target="#myModal4">ADMIN.MASC</a>
              </div>
            </div>

          </div>

          <div class="col-lg-3 col-md-12">
            <div class="box col-md-12">
              <h3>Lista de Mascotas</h3>
                <div class="row">
              <img src="assets/img/mascota2.jpg" alt="Card image cap" style="margin-left:25%;">
              <div class="card-body">
                <h5 class="card-title" style="font-weight: 500;">Consulta de Mascotas</h5>
                <p class="card-text" style="text-align: justify;font-family: Arimo;font-size: 14px;">Bienvenido, en este modulo podras ver enlistada toda la informacion de las mascotas que han ingresado en la base de datos.</p>
              </div>
              </div>
              <div class="btn-wrap">
                <a href="#" class="btn-buy" data-toggle="modal" data-target="#myModal5">CONS.MASC</a>
              </div>
            </div>

          </div>

          <div class="col-lg-3 col-md-12">
            <div class="box col-md-12">
              <h3>Actualizacion de Mascotas</h3>
                <div class="row">
              <img src="assets/img/mascota3.jpg" alt="Card image cap" style="margin-left:25%;">
              <div class="card-body">
                <h5 class="card-title" style="font-weight: 500;">Actualizar Mascotas</h5>
                <p class="card-text" style="text-align: justify;font-family: Arimo;font-size: 14px;">Bienvenido, en este modulo podras modificar toda la informacion necesaria para actualizar la base de mascotas.</p>
              </div>
              </div>
              <div class="btn-wrap">
                <a href="#" class="btn-buy" data-toggle="modal" data-target="#myModal6">ACT.MASC</a>
              </div>
            </div>

          </div>
          <div class="col-lg-3 col-md-12">
            <div class="box col-md-12">
              <h3>Baja de Mascota</h3>
                <div class="row">
              <img src="assets/img/mascota4.jpg" alt="Card image cap" style="margin-left:25%;">
              <div class="card-body">
                <h5 class="card-title" style="font-weight: 500;">Eliminar Mascota</h5>
                <p class="card-text" style="text-align: justify;font-family: Arimo;font-size: 14px;">Bienvenido, en este modulo podras eliminar los registros de las mascotas almacenadas en la base de datos de la plataforma.</p>
              </div>
              </div>
              <div class="btn-wrap">
                <a href="#" class="btn-buy" data-toggle="modal" data-target="#myModal7">ELIM.MASC</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>
  <footer id="footer">
      <div class="copyright">
        &copy; Copyright <strong><span>Prueba</span></strong>. Reservados todos los derechos
      </div>
      <div class="credits">
        Diseñado para prueba, utilizando las librerias de boostrap
      </div>

  </footer>
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/script.js"></script>s
  <?php
  if (isset($usuario)) {
  $conexion=mysqli_connect('localhost','root','','mascotas');
  $sqlVal2="Select * from usuarios where Usuario='$usuario' and Clave='$codigo'";
  $resultado=mysqli_query($conexion,$sqlVal2);
  if ($Registros=mysqli_fetch_array($resultado)) {
     $valor1=$Registros['Perfil'];
     if ($valor1=="Vendedor") {
         echo  '<script type="text/javascript">'
           , '$(".perfiles").hide();'
           ,'</script>';
      }elseif ($valor1=="Administrador") {
        echo  '<script type="text/javascript">'
          , '$(".perfiles").show();'
          , '$(".tienda").show();'
          ,'</script>';

     }else{
        echo "El exito ya llego, feliz";
        echo mysqli_query($conexion,$sqlVal2);
  }
  }
}else{
     echo  '<script type="text/javascript">'
          ,'window.location.href="http://localhost/Medicio/Login.php";'
          ,'</script>';
}
  ?>

 </body>
</html>
