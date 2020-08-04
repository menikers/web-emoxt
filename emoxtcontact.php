<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>ontacto | Finca Castel de Oro</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="description" name="Finca Castel de Oro">
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-TM833NG');</script>
  <!-- End Google Tag Manager -->
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156912506-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-156912506-1');
  </script>




  <!-- Favicons -->
  <link rel="canonical" href="http://fincacasteldeoro.com">
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Rapid
    Theme URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TM833NG"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
    <!--==========================
  Header
  ============================-->
  <header id="header">

    <div id="topbar">
      <div class="container">
        <div class="social-links">
          <a href="https://www.facebook.com/Fincacasteldeoro" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <h1 class="text-light"><a href="index.html" class="scrollto"><span></span></a></h1>
        <a href="index.html" class="scrollto"><img src="img/logo.png" alt="Campo de Magueyes dónde se obtiene la miel de maguey " class="img-fluid"></a>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Inicio</a></li>
          <li class="drop-down"><a href="">Productos</a>
            <ul>
              <li><a href="mieldemaguey.html">MIEL DE MAGUEY</a></li>
              <li><a href="#"></a></li>
            </ul>
          </li>
          <li><a href="contact.php">Contacto</a></li>
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center">
        <div class="col-md-6 intro-info order-md-first order-last">
          <!-- <h2>Miel de maguey<br>endulzante <span>natural!</span></h2> -->
          <div>
            <!--<a href="#about" class="btn-get-started scrollto"> Conoce más</a>-->
          </div>
        </div>
  
        <div class="col-md-6 intro-img order-md-last order-first">
          <img src="img/intro-img.svg" alt="" class="img-fluid">
        </div>
      </div>

    </div>
  </section><!-- #intro -->

  
  <!--==========================
    Footer
  ============================-->
  <footer id="footer" class="section-bg">
    <div class="footer-top">
      <div class="container">
           <div class="row align-items-center justify-content-between">
                <div class="col-12 col-lg-5">
                    <!-- Section Heading -->
                    <div class="section-bg">
                        <h4>Contacto</h4>
                        <div class="contact-information">    
                          <p>Comuníquese con nosotros: </p>
                          <p>Whatsapp: 772 123 70 10<span> </p>
                          <p>info@fincacastedeoro.com</p>
                        </div>     
                    </div>
                    <?php
                        error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
                        if(isset($_GET["respuesta"])){
                          echo '<div class="alert-post">';
                            echo '<span>' . $_GET["respuesta"] . '</span>';
                          echo '</div>';
                        }
                    ?>
                    <!-- Contact Form Area -->
                                    
                    <div class="form">
                    </div>
                        <form method="post" action="form.php">
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control"  placeholder="Nombre completo" name="name" required pattern="[a-zA-Z0-9]+[a-zA-Z0-9 ]+" title="Nombre completo solo permite letras.">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" required placeholder="Correo electrónico" name="email">
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="comments" cols="30" rows="10" placeholder="Mensaje"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button  type="submit" title="Send Message" name="submit">Enviar mensaje</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <!-- Google Maps -->
                    <div class="map-area mb-100">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3734.6215076009403!2d-99.09193448507447!3d20.60350888623037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d15bb7aa321339%3A0xd1077c8746e9b3de!2sFinca%20Castel%20de%20Oro!5e0!3m2!1sde!2smx!4v1579028072242!5m2!1sde!2smx" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

      </div>
    </div>



    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Finca Castel de Oro</strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery-1.11.3.min.js"></script> 
  <script src="js/custom.js"></script> 


  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  <script src="js/custom.js"></script> 

</body>
</html>
