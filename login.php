<?php 
  session_start();

    if (isset($_POST['entrar'])) {
      require 'conexion.php';

     
      $correo = $_POST['correo'];
      $contrasena = $_POST['contrasena'];

      $query=$cnnPDO->prepare('SELECT * from usuarios WHERE correo=:correo and contrasena=:contrasena ');

      $query->bindParam(':correo',$correo);
      $query->bindParam(':contrasena',$contrasena);

      $query->execute();

      $count=$query->rowCount();
      $campo = $query->fetch();

      if ($count) {
        $_SESSION['nombre'] = $campo['nombre'];
        $_SESSION['usuario'] = $campo['usuario'];
        $_SESSION['correo'] = $campo['correo'];
        $_SESSION['contrasena'] = $campo['contrasena'];

          header("location:principal.php");

      }
  }
    ob_end_flush();
  ?>



<!DOCTYPE html>
<html>
<head>
  
  <!-- Font Awesome -->
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
  />
  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
  />
  <!-- MDB -->
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.css"
    rel="stylesheet"
  />  
  <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <!-- owl stylesheets -->
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesheet" href="css/owl.theme.default.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   <link rel="stylesheet" href="css/main.css">
  <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.js"
  ></script>

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>
<body>
    <nav class="full-box NavBar">
        <div class="full-box NavBar-logo">
            <figure class="full-box">
                <img src="assets/img/logo.png" alt="Acodjar" class="img-responsive">
            </figure>   
        </div>
        <ul class="full-box list-unstyled text-right NavBar-navigation">
           <li>
                <a href="index.php" class="text-condensed">INICIO</a>
            </li>
            <li>
                <a href="login.php" class="text-condensed">INICIAR SESIÒN</a>
            </li>
            <li>
                <a href="registro.php" class="text-condensed">REGISTRARSE</a>
            </li>
            
        </ul>
        <span class="glyphicon glyphicon-option-vertical visible-xs btn-mobile-menu" aria-hidden="true"></span>
 
    </nav>    
<!-- NavBar -->
         

    <div style='width:40%;margin:0 auto; margin-top:50px;'>
    <div class='card border border-dark  text-center'>
     <div class='card-header'>
        <b><font color=#5B5B5B>INICIO DE SESIÒN</font></b>

      </div>
      <div class='card-body'>
        <h6 class='card-title'><font color=#B5B5B5><i><strong>Ingresa los datos requeridos</font></i></strong></h6>
      <br>

      <img
        src="assets/img/logo.png"
          height="70"
          width="130"
          loading="lazy"
          style="margin-top: 1px;"/></font>
      <br><br>
      <form id="form"  method="post" style="color: #757575;">
        
        <input type="text" name="correo" id="correo" class="form-control" placeholder="Correo Electronico">
        <br>
          <input type="password" name="contrasena" id="contrasena" class="form-control" placeholder="Contraseña">
        <br>
        
      
        <button class="btn btn-outline-dark btn-rounded btn-block z-depth-0 my-4 waves-effect" id="enviar" name="entrar" type="submit">Ingresar</button>
        
      
      </form>

    </div>
    </div>
    </div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</body>
</html>
    <script type="text/javascript">
    $(document).ready(function() {
        let formatoemail = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
        $('#enviar').click(function() {

     if ($("#password").val() == ""){
             Swal.fire({
                      icon: 'error',
                      title: '¡¡¡Error!!!',
                      text: 'Debe de Ingresar contraseña',
                      //position: 'top-end',
                      showConfirmButton: true,
                      ConfirmButtonText: 'Aceptar',
                      timerProgressBar: true,
                      
                    }).then(function(){
                        //window.location="registro.php"
                    });
            return false;
          }
          });
    });
    </script>
    <script type="text/javascript">
    $(document).ready(function() {
        let formatoemail = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
        $('#enviar').click(function() {

     if ($("#email").val() == ""){
             Swal.fire({
                      icon: 'error',
                      title: 'Ingresa el correo',
                      text: 'Debe de ingresar el correo asignado',
                      //position: 'top-end',
                      showConfirmButton: true,
                      ConfirmButtonText: 'Aceptar',
                      timerProgressBar: true,
                      //timer: 2500
                      
                    }).then(function(){
                        //window.location="registro.php"
                    });
    
            return false;
          }
          else if ($("#email").val() == "" || !formatoemail.test($("#saludtrabajo@gmail.com").val())){
            Swal.fire({
                      icon: 'error',
                      title: 'Datos incorrectos',
                      text: 'Debe de ingresar el correo registrado',
                      //position: 'top-end',
                      showConfirmButton: true,
                      ConfirmButtonText: 'Aceptar',
                      timerProgressBar: true,
                      //timer: 2500
            })
            return false
          }
          });
    });
    </script>

