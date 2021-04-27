$('.adminusers').hide();
$('#ModuloMascotas').hide();
$('#ModuloUsuarios').hide();
$('.modmascotas').hide();
$('#datos').hide();
$('#datos2').hide();
$('#datos3').hide();
$('#inicio').hide();
$('#datosID').hide();
$('#datosEstado').hide();
$('#ActMasc').hide();
$('#ElimMasc').hide();
$('#ElimUser').hide();
$('#ActUser').hide();


$('.perfiles').click(function(){
    $('#ModuloUsuarios').show();
    $('#ModuloMascotas').hide();
    $('#ModuloMenu').hide();
    $('.logprincipal').hide();
    $('.modmascotas').hide();
    $('.adminusers').toggle(1000);

})

$('.tienda').click(function(){
    $('#ModuloMascotas').show();
    $('#ModuloUsuarios').hide();
    $('#ModuloMenu').hide();
    $('.logprincipal').hide();
    $('.adminusers').hide();
    $('.modmascotas').toggle(1000);

})

$('.Menu').click(function(){
  $('.logprincipal').show();
  $('#ModuloUsuarios').hide();
    $('#ModuloUsuarios').hide();
  $('#ModuloMascotas').hide();
  $('.modmascotas').hide();
  $('.adminusers').hide();
})

$('#consGen').click(function(){
  $('#datos').show();
  $('#datos2').hide();
  $('#datos3').hide();
  $('#datosID').hide();
  $('#datosEstado').hide();
  $('#consIdent').prop( "checked", false );
  $('#consEst').prop( "checked", false );
  $.ajax({
     url: 'tables/ListaMascotas.php',
     type: 'POST',
     success: function(respuesta ) {
    $("#datos").load("tables/ListaMascotas.php");
      },
     error: function() {
     $("#alertica").load("Index.php");
      }
    })
})

$('#ConsID').click(function(){
  var ident = $('#consultaID').val();
  $.ajax({
     url: 'tables/ListarID.php',
     type: 'POST',
     success: function(respuesta ) {
    $("#datos2").load("tables/ListarID.php",{ident});
      },
     error: function() {
      }
    })
})

$('#ConsEstado').click(function(){
  var estado = $('#consultaEstado').val();
  $.ajax({
     url: 'tables/ListarEstado.php',
     type: 'POST',
     success: function(respuesta ) {
    $("#datos3").load("tables/ListarEstado.php",{estado});
      },
     error: function() {
      }
    })
})

$('#consIdent').click(function(){
  $('#datos').hide();
  $('#datos2').show();
  $('#datos3').hide();
   $('#datosID').show();
   $('#datosEstado').hide();
   $('#consEst').prop( "checked", false );
   $('#consGen').prop( "checked", false );
   $('#consIdent').prop( "checked", true );
})

$('#consEst').click(function(){
  $('#datos').hide();
  $('#datos2').hide();
  $('#datos3').show();
   $('#datosEstado').show();
   $('#datosID').hide();
   $('#consIdent').prop( "checked", false );
   $('#consEst').prop( "checked", true );
   $('#consGen').prop( "checked", false );
})


$('#RegUsuario').click(function(){
 var Usuario=$('#usuario').val();
  var Clave=$('#clave').val();
  var Perfil=$('#perfil').val();
   if (Usuario=='') {
     Swal.fire(
       'Advertencia!',
       'Debe ingresar el usuario!',
       'error'
         )
   }else if (Clave=='') {
     Swal.fire(
       'Advertencia!',
       'Debe ingresar la contraseña!',
       'error'
         )
   }else if (Perfil=='Selecciona...') {
     Swal.fire(
       'Advertencia!',
       'Debe ingresar el perfil!',
       'error'
         )
   }else {
       var datos=$('#IngresoUsuarios').serialize();
      const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
      confirmButton: 'btn btn-success',
      cancelButton: 'btn btn-danger'
    },
    buttonsStyling: false
  })
  swalWithBootstrapButtons.fire({
    title: 'Esta a punto de registrar el usuario:' + ' ' + Usuario,
    text: "Esta seguro que desea registrarlo?",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Si, Deseo ingresarlo',
    cancelButtonText: 'No, Cancelar!',
    reverseButtons: true
  }).then((result) => {
    if (result.value) {
    $.ajax({
    type:"POST",
    url:"forms/InsertFormUser.php",
    data:datos,
    success:function(r){
    if(r==1){
      Swal.fire(
        'En hora buena!',
        'El usuario quedo registrado correctamente!',
        'success'
          )
         setInterval("location.reload()",1000);

   }else if (r==3){
     Swal.fire(
       'Advertencia!',
       'El usuario ya se encuentra registrado!',
       'error'
         )
 }else{
   alert("Fallo en la conexion con el servidor");
   }
   }
 });
} else if (
   result.dismiss === Swal.DismissReason.cancel
 ) {
 }
})
return false;
}
});
$('#RegMascota').click(function(){
 var masc=$('#idmasc').val();
 var raza=$('#raza').val();
 var cate=$('#cat').val();
 var estado=$('#est').val();
   if (masc=='') {
     Swal.fire(
       'Advertencia!',
       'Debe ingresar el ID!',
       'error'
         )
   }else if (raza=='') {
     Swal.fire(
       'Advertencia!',
       'Debe ingresar la raza de la mascota!',
       'error'
         )
   }else if (estado=='Selecciona...') {
     Swal.fire(
       'Advertencia!',
       'Debe ingresar el estado!',
       'error'
         )
   }else if (cate=='Selecciona...') {
     Swal.fire(
       'Advertencia!',
       'Debe ingresar la categoria!',
       'error'
         )
   }else{

       var datos=$('#IngresoMascotas').serialize();
      const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
      confirmButton: 'btn btn-success',
      cancelButton: 'btn btn-danger'
    },
    buttonsStyling: false
  })

  swalWithBootstrapButtons.fire({
    title: 'Esta a punto de registrar la categoria:' + ' ' + cate,
    text: "Esta seguro que desea registrarlo?",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Si, Deseo ingresarlo',
    cancelButtonText: 'No, Cancelar!',
    reverseButtons: true
  }).then((result) => {
    if (result.value) {
    $.ajax({
    type:"POST",
    url:"forms/InsertFormMascota.php",
    data:datos,
    success:function(r){
    if(r==1){
      Swal.fire(
        'En hora buena!',
        'La mascota quedo registrada correctamente!',
        'success'
          )
         setInterval("location.reload()",1000);
   }else if (r==3){
     Swal.fire(
       'Advertencia!',
       'Este ID ya se encuentra registrado!',
       'error'
         )
 }else{
   alert("Fallo en la conexion con el servidor");
   }
   }
 });
} else if (
   result.dismiss === Swal.DismissReason.cancel
 ) {
 }
})
return false;
}
});
$('#ConsActForm').click(function(){
  $('#ActMasc').show();
  $('#RegistrosActID').hide();
  $('#inicio').show();
  id_mascota = $('#consultaActID').val();
          $.post("forms/ConsultMascotaModif.php", { id_mascota: id_mascota }, function(data){
            var mascota = data.split("_")[0];
            var raza = data.split("_")[1];
            var categ = data.split("_")[2];
            var est = data.split("_")[3];
            var codmas = data.split("_")[4];
            $("#idact").val(mascota);
            $("#razaact").val(raza);
            $("#catact").val(categ);
            $("#estact").val(est);
            $("#codmasc").val(codmas);
          });
})
$('#ConsActFormUser').click(function(){
  $('#ActUser').show();
  $('#RegistrosActUSER').hide();
  id_user = $('#consultaActUSER').val();
          $.post("forms/ConsultaUsuarioModf.php", { id_user: id_user }, function(data){
            var users = data.split("_")[0];
            var clave = data.split("_")[1];
            var perfil = data.split("_")[2];
            var codid = data.split("_")[3];
            $("#user").val(users);
            $("#clav").val(clave);
            $("#perf").val(perfil);
            $("#codmasc3").val(codid);
          });

})

$('#ConsElimForm').click(function(){
  $('#ElimMasc').show();
  $('#RegistrosElimID').hide();
  $('#inicio2').show();

  id_mascota = $('#consultaElimID').val();
          $.post("forms/ConsultMascotaModif.php", { id_mascota: id_mascota }, function(data){
            var mascota = data.split("_")[0];
            var raza = data.split("_")[1];
            var categ = data.split("_")[2];
            var est = data.split("_")[3];
            var codmas = data.split("_")[4];

            $("#idelim").val(mascota);
            $("#razaelim").val(raza);
            $("#catelim").val(categ);
            $("#estelim").val(est);
            $("#codmasc2").val(codmas);
          });
       })
        $('#ConsElimFormUser').click(function(){
        $('#ElimUser').show();
        $('#RegistrosElimUSER').hide();
           id_user = $('#consultaElimUSER').val();
            $.post("forms/ConsultaUsuarioModf.php", { id_user: id_user }, function(data){
            var users = data.split("_")[0];
            var clav = data.split("_")[1];
            var perfils = data.split("_")[2];
            var idus = data.split("_")[3];
            $("#userelim").val(users);
            $("#clavelim").val(clav);
            $("#perfelim").val(perfils);
            $("#codmasc4").val(idus);

          });
})

$('#volverID').click(function(){
  $('#ActMasc').hide();
  $('#RegistrosActID').show();
})

$('#volverID2').click(function(){
  $('#ElimMasc').hide();
  $('#RegistrosElimID').show();

})

$('#volverID3').click(function(){
  $('#ActUser').hide();
  $('#RegistrosActUSER').show();

})

$('#volverID4').click(function(){
  $('#ElimUser').hide();
  $('#RegistrosElimUSER').show();

})

$('#actualizarMasc').click(function(){
  var parametros2 = $('#ActMasc').serialize();

         const swalWithBootstrapButtons = Swal.mixin({
       customClass: {
         confirmButton: 'btn btn-success',
         cancelButton: 'btn btn-danger'
       },
       buttonsStyling: false
     })
         swalWithBootstrapButtons.fire({
           text: "Esta seguro de que desea modificar el registro?!",
           icon: 'warning',
           showCancelButton: true,
           confirmButtonText: 'Si, Confirmar!',
           cancelButtonText: 'No, Cancelar!',
           reverseButtons: true
         }).then((result) => {
           if (result.value) {

             $.ajax({
                  type: "POST",
                  url: "forms/ActualizacionMascotas.php",
                  data: parametros2,
                   beforeSend: function(objeto){
                    $("#resultados").html("Enviando...");
                    },
                  success: function(datos){
                  $("#resultados").html(datos);

                    $('#ActMasc').modal('hide');
                    Swal.fire(
                      'En hora buena!',
                      'El registro fue modificado con exito!',
                      'success'
                        )
                       setInterval("location.reload()",1000);
                       //$('.fade').remove();
                      //$('body').removeClass('modal-open');
                     //$('.modmascotas').show();

           }

        });

          }else if (
              /* Read more about handling dismissals below */
              result.dismiss === Swal.DismissReason.cancel
            ) {

            }
          })



  event.preventDefault();
})




$('#actualizarUsuario').click(function(){
  var parametros2 = $('#ActUser').serialize();

         const swalWithBootstrapButtons = Swal.mixin({
       customClass: {
         confirmButton: 'btn btn-success',
         cancelButton: 'btn btn-danger'
       },
       buttonsStyling: false
     })
         swalWithBootstrapButtons.fire({
           text: "Esta seguro de que desea modificar el registro?!",
           icon: 'warning',
           showCancelButton: true,
           confirmButtonText: 'Si, Confirmar!',
           cancelButtonText: 'No, Cancelar!',
           reverseButtons: true
         }).then((result) => {
           if (result.value) {

             $.ajax({
                  type: "POST",
                  url: "forms/ActualizacionUsuarios.php",
                  data: parametros2,
                   beforeSend: function(objeto){
                    $("#resultados").html("Enviando...");
                    },
                  success: function(datos){
                  $("#resultados").html(datos);

                    $('#ActUser').modal('hide');
                    Swal.fire(
                      'En hora buena!',
                      'El registro fue modificado con exito!',
                      'success'
                        )
                       setInterval("location.reload()",1000);
                       //$('.fade').remove();
                      //$('body').removeClass('modal-open');
                     //$('.modmascotas').show();

           }

        });

          }else if (
              /* Read more about handling dismissals below */
              result.dismiss === Swal.DismissReason.cancel
            ) {

            }
          })



  event.preventDefault();
})




$('#eliminarMasc').click(function(){
  var parametros2 = $('#ElimMasc').serialize();
  const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
     },
    buttonsStyling: false
     })
    swalWithBootstrapButtons.fire({
    text: "Esta seguro de que desea eliminar el registro?!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Si, Confirmar!',
    cancelButtonText: 'No, Cancelar!',
    reverseButtons: true
    }).then((result) => {
        if (result.value) {
        $.ajax({
            type: "POST",
            url: "forms/EliminacioMascota.php",
            data: parametros2,
            beforeSend: function(objeto){
            $("#resultados").html("Enviando...");
            },
            success: function(datos){
            $("#resultados").html(datos);
            $('#ActMasc').modal('hide');
            Swal.fire(
                    'En hora buena!',
                    'El registro fue eliminado con exito!',
                    'success'
                      )
                     setInterval("location.reload()",1000);
                       //$('.fade').remove();
                      //$('body').removeClass('modal-open');
                     //$('.modmascotas').show();

           }

        });

          }else if (
              /* Read more about handling dismissals below */
              result.dismiss === Swal.DismissReason.cancel
            ) {

            }
          })



  event.preventDefault();
})


$('#eliminarUsuario').click(function(){
  var parametros2 = $('#ElimUser').serialize();
  const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
     },
    buttonsStyling: false
     })
    swalWithBootstrapButtons.fire({
    text: "Esta seguro de que desea eliminar el registro?!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Si, Confirmar!',
    cancelButtonText: 'No, Cancelar!',
    reverseButtons: true
    }).then((result) => {
        if (result.value) {
        $.ajax({
            type: "POST",
            url: "forms/EliminacionUsuario.php",
            data: parametros2,
            beforeSend: function(objeto){
            $("#resultados").html("Enviando...");
            },
            success: function(datos){
            $("#resultados").html(datos);
            $('#ElimUser').modal('hide');
            Swal.fire(
                    'En hora buena!',
                    'El registro fue eliminado con exito!',
                    'success'
                      )
                     setInterval("location.reload()",1000);

           }

        });

          }else if (
              /* Read more about handling dismissals below */
              result.dismiss === Swal.DismissReason.cancel
            ) {

            }
          })



  event.preventDefault();
})
