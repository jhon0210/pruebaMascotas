<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Inner Page - Medicio Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!-- =======================================================
  * Template Name: Medicio - v2.1.0
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top" style="background:#0F0F23;">
    <div class="container d-flex align-items-center justify-content-between">


    </div>
  </div>

<style media="screen">


  .modal-content{
    border-radius: 41px 41px 41px 41px;
-moz-border-radius: 41px 41px 41px 41px;
-webkit-border-radius: 41px 41px 41px 41px;
border: 0px solid #000000;
  }


  .modal-header{
    border-radius: 41px 41px 41px 41px;
-moz-border-radius: 41px 41px 41px 41px;
-webkit-border-radius: 41px 41px 41px 41px;
border: 0px solid #000000;
  }


#titulo1{
  font-weight: 700;
    text-align: center;
    letter-spacing: 0.0214286rem;
    line-height: 1.5;
    font-size: 1.07143rem;
    -webkit-box-flex: 1;
    flex-grow: 1;
    margin-bottom: 2px;
    color:white;
}

</style>

  <main id="main">


<br>
<br>

    <section id="pricing" class="pricing text-center" >

          <div class="col-lg-3 col-md-12" style="margin-left:35%;">
            <div class="box col-md-12">
              <h3>Inicio de sesion</h3>
                <div class="row">
              <img src="assets/img/usuarios.png" alt="Card image cap" style="margin-left:30%;">
              <div class="card-body">
                <form class="form-group col-md-12" id="ValPerfil" method="POST" style="padding-top:5%;">
                  <div class="form-group">
                     <label for="usuario">Usuario</label>
                     <input type="text" class="form-control" name="usuario" id="usuario">
                     <small id="emailHelp" class="form-text text-muted">Esta informacion es confidencial.</small>
                  </div>
                  <div class="form-group">
                     <label for="exampleInputPassword1">Contraseña</label>
                     <input type="password" class="form-control" name="contraseña" id="contraseña">
                     <small id="emailHelp" class="form-text text-muted">Esta informacion es confidencial.</small>
                  </div>
                  <div class="form-group">
                    <div class="alert alert-danger" role="alert" id="MensajeErrorVacio">
                      <strong>Advertencia!</strong>  Hay campos vacios
                    </div>
                    <div class="alert alert-danger" role="alert" id="MensajeUsuarioErrado">
                      <strong>Advertencia!</strong>  El usuario no existe
                    </div>
                  </div>
                  <div class="form-group form-check">

                  </div>

                  <button type="button" class="btn btn-warning btn-rect col-md-6" id="IngresoModulos">Ingresar</button>

                </form>
              </div>



              </div>

            </div>

          </div>

    </section>



  </main>
  <footer id="footer">
      <div class="copyright">
        &copy; Copyright <strong><span>Medicio</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>

  </footer><!-- End Footer -->




  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script type="text/javascript">

  $('#MensajeErrorVacio').hide();
  $('#MensajeUsuarioErrado').hide();
  $('#IngresoModulos').click(function(){
     var user=$('#usuario').val();
     var clave=$('#contraseña').val();
     if ((user=='')||(clave=='')) {
       $('#MensajeUsuarioErrado').hide();
        $('#MensajeErrorVacio').toggle('slow');
     }else {
       var datos=$('#ValPerfil').serialize();
       $.ajax({
       url: 'forms/AltaPerfil.php',
       type: 'POST',
       data: datos,
       success: function(respuesta) {
         if(respuesta==3){
            window.location.href="index.php";
         }else if(respuesta==4) {
           $('#MensajeErrorVacio').hide();
           $('#MensajeUsuarioErrado').toggle('slow');
         }
       },
          error: function() {
       }
       })
     }

  })

  </script>

</body>

</html>
