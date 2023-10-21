<?php

require 'database.php';

$mensaje = "";

//agregar la informacion BD
if(!empty($_POST['email']) && !empty($_POST['password'])){
    $sql = "INSERT INTO usuarios (email, password) VALUES (:email, :password)";
    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'],PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    //validamos registro
    if($stmt->execute()){
        $mensaje = "El usuario se ha registrado correctamente";
    }else{
        $mensaje = "Lo sentimos no se hay registro en proceso";
    }

}

    
?>

<!DOCTYPE html>
<html lang="es">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Contact</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
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
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mr-auto">
               <li class="nav-item active">
                  <a class="nav-link" href="index.html">Inicio</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="nosotros.html">Nosotros</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="app/iniciosesion.php">Aplicativo</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="registro.php">registro</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="contacto.html">Contacto</a>
               </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#"><img src="images/search-icon.png"></a>
                  </li>
               </ul>
            </div>
         </nav>
      </div>
      <!-- header section end -->
      <!-- contact section start -->
      <div class="contact_section layout_padding margin_90">
         <div class="container">
            <h1 class="contact_taital">aplicativo medicallpage</h1>
            <div class="news_section_2">
               <div class="row">
                  <div class="col-md-6">
                     <div class="icon_main">
                        <div class="icon_7"><img src="images/icon-7.png"></div>
                        <h4 class="diabetes_text">Diabetes and obesity Counselling </h4>
                     </div>
                     <div class="icon_main">
                        <div class="icon_7"><img src="images/icon-5.png"></div>
                        <h4 class="diabetes_text">Obstetrics and Gynsecology</h4>
                     </div>
                     <div class="icon_main">
                        <div class="icon_7"><img src="images/icon-6.png"></div>
                        <h4 class="diabetes_text">Surgical and medical Oncology</h4>
                     </div>
                  </div>
                  <div class="col-md-6">
                  <div class="contact_box">
                        <form action="registro.php" method="post">
                        <h1 class="book_text">Registro</h1>
                        <input type="email" class="Email_text" placeholder="Ingresar correo" name="correo">
                        <input type="password" class="Email_text" placeholder="Ingrese contraseña" name="contrasena">
                        <input type="submit" value="Enviar">
                        <!-- <div class="send_bt"><a href="">registrarme</a></div>-->
                        
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-sm-6">
                  <div class="footer_logo"><a href="index.html"><img src="images/footer-logo.png"></a></div>
                  <h1 class="adderss_text">Contact Us</h1>
                  <div class="map_icon"><img src="images/map-icon.png"><span class="paddlin_left_0">Page when looking at its</span></div>
                  <div class="map_icon"><img src="images/call-icon.png"><span class="paddlin_left_0">+7586656566</span></div>
                  <div class="map_icon"><img src="images/mail-icon.png"><span class="paddlin_left_0">volim@gmail.com</span></div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h1 class="adderss_text">Doctors</h1>
                  <div class="hiphop_text_1">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h1 class="adderss_text">Useful Links</h1>
                  <div class="Useful_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered ,</div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h1 class="adderss_text">Newsletter</h1>
                  <input type="text" class="Enter_text" placeholder="Enter your Emil" name="Enter your Emil">
                  <div class="subscribe_bt"><a href="#">Subscribe</a></div>
                  <div class="social_icon">
                     <ul>
                        <li><a href="#"><img src="images/fb-icon.png"></a></li>
                        <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                        <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
                        <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2019 All Rights Reserved. Design by <a href="https://html.design">Free html  Templates</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>
<body>
    <li class="nav-item">
        <a class="nav-link" href="registro.html">registro</a>
     </li>
    
    <div class="container">
    <link rel="stylesheet" href="registro.css">
        <h1>Registro de Medicina</h1>
        <form action="registro.php" method="post">
            <label for="nombre">Nombre del paciente:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="fecha">Fecha de prescripción:</label>
            <input type="text" id="fecha" name="fecha" required>

            <label for="medicamento">Medicamento:</label>
            <input type="text" id="medicamento" name="medicamento" required>

            <label for="dosis">Dosis:</label>
            <input type="text" id="dosis" name="dosis" required>

            <label for="observaciones">Observaciones:</label>
            <textarea id="observaciones" name="observaciones" rows="4"></textarea>

            <button type="submit">Registrar</button>
        </form>
    </div>
</body>
</html>
