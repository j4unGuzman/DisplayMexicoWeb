<?php 
//include'lib/email.php'; 
require 'lib/PHPMailer/PHPMailerAutoload.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Display Mexico</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet prefetch" href="http:////netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen">
  <link rel="stylesheet" type="text/css" href="css/grid_horizontal_buttons_widthHeightRestrain.css">
  <!--[if lte IE 8 ]><link rel="stylesheet" type="text/css" href="css/ie.css" /><![endif]-->
  <link href="css/styles.css" rel="stylesheet" type="text/css" />

  <!-- 
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif">


  <!-- 
  <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
  -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script> -->
  <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
  <script type="text/javascript" src="js/jquery.prettyPhoto.js" charset="utf-8"></script>
  <script type="text/javascript" src="js/jquery.mousewheel.js"></script>
  <script type="text/javascript" src="js/jquery.func.js"></script>
  <script type="text/javascript" src="js/jquery.thumbGallery.js"></script>
  <script type="text/javascript">
    
      function thumbGallerySetupDone(){
        //function called when component is ready to receive public function calls
        console.log('thumbGallerySetupDone');
      }
    
      function detailActivated(){
        //function called when prettyphoto is opened
        console.log('detailActivated');
      }
      
      function detailClosed(){
        //function called when prettyphoto is closed
        console.log('detailClosed');
      }
      
      function overThumb(i,j){
        //function called when mouse over thumb holder (plus returned item number: i = first level, j = second level)
        console.log('overThumb: ', i,' , ', j);
      }
      
      function outThumb(i, j){
        //function called when mouse out thumb holder (plus returned item number: i = first level, j = second level)
        console.log('outThumb: ', i,' , ', j);
      }
      
      jQuery(document).ready(function($) {
            
        $('#componentWrapper').thumbGallery({ 
          /* GENERAL */
          /*layoutType: grid/line */
          layoutType: 'grid',
          /*thumbOrientation: horizontal/vertical */
          thumbOrientation: 'horizontal',
          /*moveType: scroll/buttons */
          moveType: 'buttons',
          /*scrollOffset: how much to move scrollbar and scrolltrack off the content (enter 0 or above) */
          scrollOffset: 0,
          
          /* GRID SETTINGS */
          /*verticalSpacing:  */
          verticalSpacing: 10,
          /*horizontalSpacing:  */
          horizontalSpacing: 10,
          /*buttonSpacing: button spacing from the grid itself */
          buttonSpacing: 10,
          /*direction: left2right/top2bottom (direction in which boxes are listed) */
          direction: 'top2bottom',
          
          /* INNER SLIDESHOW */
          /*innerSlideshowDelay: slideshow delay for inner items in seconds, random value between: 'min, max', 
          enter both number the same for equal time delay like for example 2 seconds: '2,2' */
          innerSlideshowDelay:[2,4],
          /*innerSlideshowOn: autoplay inner slideshow, true/false */
          innerSlideshowOn:false
        }); 
        
        jQuery("a[data-rel^='prettyPhoto']").prettyPhoto({theme:'pp_default',
          deeplinking: false, 
          callback: function(){detailClosed();}/* Called when prettyPhoto is closed */}); 
       });
    
    </script>

</head>
<body>

<header>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
    <!--
      <a href="#"><img class="logo-header" src="images/assets/header/logotype.png" width="64" height="56" border="0" class="float-left"></a>
    -->
    <a href="#"><img class="logo-header" src="images/assets/header/logo_display_mexico_3d.png" width="64" height="56" border="0" class="float-left"></a>
      <!-- 
      <ul class="icon-circle list-unstyled list-inline" style="float: right; margin-top: 3%;"> 
      -->
      <ul class="social-icons icon-circle list-unstyled list-inline social" style="float: right; margin-top: 3%;"> 
        <li> 
          <a href="#"><i class="fa fa-twitter"></i></a>
        </li>  
        <li>
          <a href="#"><i class="fa fa-facebook"></i></a>
        </li>
        <li>
          <a href="#"><i class="fa fa-google-plus"></i></a>
        </li>  
        <li>
          <a href="#"><i class="fa fa-envelope"></i></a>
        </li>  
      </ul> 
    </div>
  </nav>
</header>

<div class="container">

  <!-- Carousel
  ================================================== -->
  <div id="carousel1" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel1" data-slide-to="0" class="active"></li>
      <li data-target="#carousel1" data-slide-to="1"></li>
      <li data-target="#carousel1" data-slide-to="2"></li>
      <li data-target="#carousel1" data-slide-to="3"></li>
      <li data-target="#carousel1" data-slide-to="4"></li>
    </ol>

    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img class="first-slide" src="images/1_1024x600.png" alt="First slide">


        <div class="textoSobrepuestoTitulo1">
            <p class = "titulosMontserrat" style="text-align:left;">Trazando tus ideas,</p>
        </div>
         <div class="textoSobrepuestoTitulo2">
            <p class = "titulosMontserrat" style="text-align:left;">Innovando tus stands</p>
        </div>


        <div class="textoSobrepuesto">
            <p>En Display México generamos soluciones para sus necesidades de exposición, </p>
        </div>
        <div class="textoSobrepuesto2">
            <p> beneficiando así a nuestros clientes con un servicio Rápido , Económico y de Calidad</p>
        </div>
		  
		<div class="botonSobrepuesto">
          <input class="btn btn-info btn-lg" type="button" onClick="document.getElementById('seccion_pregunta').scrollIntoView();"  value ="Contactar" />
        </div>
		  
		  
        <div class="container">
          <div class="carousel-caption">
          </div>
        </div>
      </div>

      <div class="item">
        <img class="second-slide" src="images/2_1024x600.png" alt="Second slide">

        <div class="textoSobrepuestoTitulo1">
            <p class = "titulosMontserrat" style="text-align:left;">Trazando tus ideas,</p>
        </div>
         <div class="textoSobrepuestoTitulo2">
            <p class = "titulosMontserrat" style="text-align:left;">Innovando tus stands</p>
        </div>


        <div class="textoSobrepuesto">
            <p>En Display México generamos soluciones para sus necesidades de exposición, </p>
        </div>
        <div class="textoSobrepuesto2">
            <p> beneficiando así a nuestros clientes con un servicio Rápido , Económico y de Calidad</p>
        </div>

        <div class="container">
          <div class="carousel-caption">
          </div>
        </div>
      </div>

      <div class="item">
        <img class="third-slide" src="images/3_1024x600.png" alt="Third slide">

        <div class="textoSobrepuestoTitulo1">
            <p class = "titulosMontserrat" style="text-align:left;">Trazando tus ideas,</p>
        </div>
         <div class="textoSobrepuestoTitulo2">
            <p class = "titulosMontserrat" style="text-align:left;">Innovando tus stands</p>
        </div>



        <div class="textoSobrepuesto">
            <p>En Display México generamos soluciones para sus necesidades de exposición, </p>
        </div>
        <div class="textoSobrepuesto2">
            <p> beneficiando así a nuestros clientes con un servicio Rápido , Económico y de Calidad</p>
        </div>

        <div class="container">
          <div class="carousel-caption">
          </div>
        </div>
      </div>

      <div class="item">
        <img class="fourth-slide" src="images/4_1024x600.png" alt="Four slide">

        <div class="textoSobrepuestoTitulo1">
            <p class = "titulosMontserrat" style="text-align:left;">Trazando tus ideas,</p>
        </div>
         <div class="textoSobrepuestoTitulo2">
            <p class = "titulosMontserrat" style="text-align:left;">Innovando tus stands</p>
        </div>


        
        <div class="textoSobrepuesto">
            <p>En Display México generamos soluciones para sus necesidades de exposición, </p>
        </div>
        <div class="textoSobrepuesto2">
            <p> beneficiando así a nuestros clientes con un servicio Rápido , Económico y de Calidad</p>
        </div>
        <div class="container">
          <div class="carousel-caption">
          </div>
        </div>
      </div>

      <div class="item">
        <img class="fifth-slide" src="images/5_1024x600.png" alt="Five slide">

        <div class="textoSobrepuestoTitulo1">
            <p class = "titulosMontserrat" style="text-align:left;">Trazando tus ideas,</p>
        </div>
         <div class="textoSobrepuestoTitulo2">
            <p class = "titulosMontserrat" style="text-align:left;">Innovando tus stands</p>
        </div>

        <div class="textoSobrepuesto">
            <p>En Display México generamos soluciones para sus necesidades de exposición, </p>
        </div>
        <div class="textoSobrepuesto2">
            <p> beneficiando así a nuestros clientes con un servicio Rápido , Económico y de Calidad</p>
        </div>
        <div class="container">
          <div class="carousel-caption">
          </div>
        </div>
      </div>

    </div>

    <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="right carousel-control" href="#carousel1" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Siguiente</span>
    </a>

  </div>
  <!-- /.carousel -->

  <div class="row">

    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
      <div class="thumbnail thumbnail-top">
        <img src="images/assets/products/custom.png" alt="...">
        <div class="caption">
          <h3 class="titulosMontserrat" >EXPOSICIONES</h3>
          <p class="parrafosDroid" >Contamos con 20 a&ntilde;os siendo Profesionales en la Log&iacute;stica, planeaci&oacute;n y ejecuci&oacute;n de exposiciones. Contando as&iacute; con el equipo necesario para lograr el &eacute;xito. Tal es el ejemplo que para que para el montaje un stand se necesiten solo 9 minutos.</p>
        </div>
      </div>
    </div>

    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
      <div class="thumbnail thumbnail-top">
        <img src="images/assets/products/expo.png" alt="...">
        <div class="caption">
          <h3 class="titulosMontserrat" >CUSTOM</h3>
          <p class="parrafosDroid" >Dise&ntilde;os &uacute;nicos generados a partir de la idea del cliente transmitiendo la escencia de la empresa, utilizando as&iacute; materiales como la madera, mdf, acr&iacute;licos, iluminaci&oacute;n LED, entre otros.</p>
          
        </div>
      </div>
    </div>

    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
      <div class="thumbnail thumbnail-top">
        <img src="images/assets/products/sistema.png" alt="...">
        <div class="caption">
          <h3 class="titulosMontserrat" >SISTEMA</h3>
          <p class="parrafosDroid" >Dise&ntilde;os creados de manera personalizada resaltando la imagen del cliente utilizando como material principal el sistema de aluminio octagonal.</p>
          
        </div>
      </div>
    </div>

  </div>

  <div class="jumbotron vertical-center" style="margin-bottom: 10px;" >
   <!-- <h1  class="titulosMontserrat" >&iquest; Qui&eacute;nes Somos?</h1> -->

	 <p class="titulosMontserrat" style="font-size:60px;" >&iquest; Qui&eacute;nes Somos?</p>

    <p  class="parrafosDroid" >Somos una sempresa 100 % mexicana con 20 a&ntilde;os de experiencia en el ramo de las expocisiones, respaldada con mas de 100 clientes activos, contando as&iacute;  con los recursos humanos, materiales y tecnol&oacute;gicos de la mas alta calidad para logar la satisfacci&oacute;n total del cliente.</p>
  </div>


  <div class="row about">

    <div class="sinPadding col-xs-12 col-sm-6 col-md-6 col-lg-6">
      <div class="thumbnail thumbnail-center float-left element">
        <div class="col-md-3 text-center">
          <img src="images/assets/about_us/icon/mision_2x.png" alt="...">
        </div>
	 <div class="caption col-md-9 text-center">
          <h3 class="parrafosDroid" >Mision: Dise&ntilde;ar, fabricar y crear los stands</h3>
        </div>
      </div>
    </div>

    <div class="sinPadding col-xs-12 col-sm-6 col-md-6 col-lg-6">
      <div class="thumbnail  thumbnail-center float-right element">
        <div class="col-md-3 text-center">
          <img src="images/assets/about_us/icon/vision_2x.png" alt="...">
        </div>
        <div class="caption col-md-9 text-center">
          <h3 class="parrafosDroid" >Visi&oacute;n: Ser la empresa l&iacute;der en el montaje de stands, displays y exposiciones de todo tipo logrando con esto, la satisfacci&oacute;n total del cliente por medio de nuestro compromiso en calidad, tiempo material y servicio.</h3>
        </div>
      </div>
    </div>

  </div>

  <div class="row about">

    <div class="sinPadding col-xs-12 col-sm-6 col-md-6 col-lg-6">
      <div class="thumbnail thumbnail-center float-left element">
        <div class="col-md-3 text-center">
          <img src="images/assets/about_us/icon/values_2x.png" alt="...">
        </div>
        <div class="caption col-md-9 text-center">
          <h3  class="parrafosDroid" >Valores: Respeto formalidad, honor, sabidur&iacute;a.</h3>
        </div>
      </div>
    </div>

    <div class="sinPadding col-xs-12 col-sm-6 col-md-6 col-lg-6">
      <div class="thumbnail thumbnail-center float-right element">
        <div class="col-md-3 text-center">
          <img src="images/assets/about_us/icon/objective_2x.png" alt="...">
        </div>
        <div class="caption col-md-9 text-center">
          <h3 class="parrafosDroid" >Objetivo:Somos una empresa comprometida con sus clientes y creamos un equipo para lograr juntos el &eacute;xito.</h3>
        </div>
      </div>
    </div>
    
  </div>
</div>

<!-- 
<div style="background-color: #097EBC; height: 20px;">
-->
<div id="marcas" class="container text-center vertical-center col-md-12 jumbotron" style="background-color: #FFF;">
  <div class="col-md-12" style="width: 100%">
    <a href="#" class="marca">
      <img src="images/assets/partners/dulces-karla_logo.png" class="img-marca" alt="...">
    </a>

    <a href="#" class="marca">
      <img src="images/assets/partners/logo2.png" class="img-marca" alt="...">
    </a>

    <a href="#" class="marca">
      <img src="images/assets/partners/DegasaProtec.png" class="img-marca" alt="...">
    </a>

    <a href="#" class="marca">
      <img src="images/assets/partners/ibarra_logo.png" class="img-marca" alt="...">
    </a>

    <a href="#" class="marca">
      <img src="images/assets/partners/Logo-cdmx.png" class="img-marca" alt="...">
    </a>

	  <!--
	  
    <a href="#" class="marca">
      <img src="images/assets/partners/powerade.png" class="img-marca" alt="...">
    </a>
--->
	  
	  <a href="#" class="marca">
      <img src="images/assets/partners/canelstipo.png" class="img-marca" alt="...">
    </a>
	  
    <a href="#" class="marca">
      <img src="images/assets/partners/profile-157457646.v11.png" class="img-marca" alt="...">
    </a>
  </div>
  <div class="col-md-12" style="width: 100%">
    <a href="#" class="marca">
      <img src="images/assets/partners/sistema-educativo-justo-sierra.png" class="img-marca" alt="...">
    </a>

    <a href="#" class="marca">
      <img src="images/assets/partners/Unknown.png" class="img-marca" alt="...">
    </a>

    <a href="#" class="marca">
      <img src="images/assets/partners/logoSAR21.png" class="img-marca" alt="...">
    </a>

    <a href="#" class="marca">
      <img src="images/assets/partners/kimberly-clark.png" class="img-marca" alt="...">
    </a>

	  <!---
    <a href="#" class="marca">
      <img src="images/assets/partners/canelstipo.png" class="img-marca" alt="...">
    </a>
--->
    <a href="#" class="marca">
      <img src="images/assets/partners/LOGO-TRANSVISION-BIKE-01-1.png" class="img-marca" alt="...">
    </a>

    <a href="#" class="marca">
      <img src="images/assets/partners/tec.png" class="img-marca" alt="...">
    </a>
  </div>

  <div class="row">
    
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <p class="marcas-txt">Algunas marcas que han trabajado con nosotros.</p>
      </div>

    </div>
  </div>

  <!-- -->

  <div class="jumbotron conocenos">
    <div class="row">
    
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h1 >Conoce nuestro trabajo</h1>
      </div>

    </div>
  </div>


  <!-- Gallery
  ================================================== -->
  <div id="componentWrapper">
             
    <div class="thumbContainer" style="width: 740px; height: 320px; left: 55px; top: 61px;">
                 
      <div class="thumbInnerContainer" style="display: block;">
               
        <div class="thumbHolder" data-title="title1" data-id-i="0" data-id-j="0" style="left: 0px; top: 0px;">  
          <a class="pp_content" href="images/assets/our_work/1_480x480.png" data-rel="prettyPhoto[gallery1]" title="title1">
            <img class="thumb_hidden" src="images/assets/our_work/1_240x155.png" alt="" style="opacity: 1;" width="240" height="155">
          </a>
          <div class="title" style="top: 155px; width: 220px;"></div>
        </div>
                     
        <div class="thumbHolder" data-title="title2" data-id-i="1" data-id-j="0" style="left: 0px; top: 165px;">  
          <a class="pp_content" href="images/assets/our_work/2_480x480.png" data-rel="prettyPhoto[gallery1]" title="title2">
            <img class="thumb_hidden" src="images/assets/our_work/2_240x155.png" alt="..." style="opacity: 1;" width="240" height="155">
          </a> 
          <div class="title" style="top: 155px; width: 220px;"></div>
        </div>
                     
        <div class="thumbHolder" data-title="title3" data-id-i="2" data-id-j="0" style="left: 250px; top: 0px;">  
          <a class="pp_content" href="images/assets/our_work/3_480x480.png" data-rel="prettyPhoto[gallery1]" title="title3">
            <img class="thumb_hidden" src="images/assets/our_work/3_240x155.png" alt="..." style="opacity: 1;" width="240" height="155">
          </a>
          <div class="title" style="top: 155px; width: 220px;"></div>
        </div>
                     
        <div class="thumbHolder" data-title="title4" data-id-i="3" data-id-j="0" style="left: 250px; top: 165px;">  
          <a class="pp_content" href="images/assets/our_work/4_480x480.png" data-rel="prettyPhoto[gallery1]" title="title4">
            <img class="thumb_hidden" src="images/assets/our_work/4_240x155.png" alt="..." style="opacity: 1;" width="240" height="155">
          </a>  
          <div class="title" style="top: 132.422px; width: 220px;"></div>
        </div>
                     
        <div class="thumbHolder" data-title="Preparando montaje en Expo 2017" data-id-i="4" data-id-j="0" style="left: 500px; top: 0px;">  
          <a class="pp_content" href="images/assets/our_work/5_480x480.png" data-rel="prettyPhoto[gallery1]" title="Preparando montaje en Expo 2017">
            <img class="thumb_hidden" src="images/assets/our_work/5_240x155.png" alt="Preparando montaje en Expo 2017" style="opacity: 1;" width="240" height="155">
          </a>
          <div class="title" style="top: 155px; width: 220px;"></div>
        </div>
                    
        <div class="thumbHolder" data-title="title6" data-id-i="5" data-id-j="0" style="left: 500px; top: 0px;">  
          <a class="pp_content" href="images/assets/our_work/6_480x480.png" data-rel="prettyPhoto[gallery1]" title="title6">
            <img class="thumb_hidden" src="images/assets/our_work/6_240x155.png" alt="..." style="opacity: 1;" width="240" height="155">
          </a>
          <div class="title" style="top: 155px; width: 220px;"></div>
        </div>
                    
        <div class="thumbHolder" data-title="title7" data-id-i="6" data-id-j="0" style="left: 500px; top: 0px;">  
          <a class="pp_content" href="images/assets/our_work/7_480x480.png" data-rel="prettyPhoto[gallery1]" title="title7">
            <img class="thumb_hidden" src="images/assets/our_work/7_240x155.png" alt="..." style="opacity: 1;" width="240" height="155">
          </a>
          <div class="title" style="top: 155px; width: 220px;"></div>
        </div>
                    
        <div class="thumbHolder" data-title="title8" data-id-i="7" data-id-j="0" style="left: 500px; top: 0px;">  
          <a class="pp_content" href="images/assets/our_work/8_480x480.png" data-rel="prettyPhoto[gallery1]" title="title8">
            <img class="thumb_hidden" src="images/assets/our_work/8_240x155.png" alt="..." style="opacity: 1;" width="240" height="155">
          </a>
          <div class="title" style="top: 155px; width: 220px;"></div>
        </div>
                    
        <div class="thumbHolder" data-title="title9" data-id-i="8" data-id-j="0" style="left: 500px; top: 0px;">  
          <a class="pp_content" href="images/assets/our_work/9_480x480.png" data-rel="prettyPhoto[gallery1]" title="title9">
            <img class="thumb_hidden" src="images/assets/our_work/9_240x155.png" alt="..." style="opacity: 1;" width="240" height="155">
          </a>
          <div class="title" style="top: 155px; width: 220px;"></div>
        </div>
                    
        <div class="thumbHolder" data-title="title10" data-id-i="9" data-id-j="0" style="left: 500px; top: 0px;">  
          <a class="pp_content" href="images/assets/our_work/10_480x480.png" data-rel="prettyPhoto[gallery1]" title="title10">
            <img class="thumb_hidden" src="images/assets/our_work/10_240x155.png" alt="..." style="opacity: 1;" width="240" height="155">
          </a>
          <div class="title" style="top: 155px; width: 220px;"></div>
        </div>
                    
        <div class="thumbHolder" data-title="title11" data-id-i="10" data-id-j="0" style="left: 500px; top: 0px;">  
          <a class="pp_content" href="images/assets/our_work/11_480x480.png" data-rel="prettyPhoto[gallery1]" title="title11">
            <img class="thumb_hidden" src="images/assets/our_work/11_240x155.png" alt="..." style="opacity: 1;" width="240" height="155">
          </a>
          <div class="title" style="top: 155px; width: 220px;"></div>
        </div>
                    
        <div class="thumbHolder" data-title="title12" data-id-i="11" data-id-j="0" style="left: 500px; top: 0px;">  
          <a class="pp_content" href="images/assets/our_work/12_480x480.png" data-rel="prettyPhoto[gallery1]" title="title12">
            <img class="thumb_hidden" src="images/assets/our_work/12_240x155.png" alt="..." style="opacity: 1;" width="240" height="155">
          </a>
          <div class="title" style="top: 155px; width: 220px;"></div>
        </div>
                    
        <div class="thumbHolder" data-title="title13" data-id-i="12" data-id-j="0" style="left: 500px; top: 0px;">  
          <a class="pp_content" href="images/assets/our_work/13_480x480.png" data-rel="prettyPhoto[gallery1]" title="title13">
            <img class="thumb_hidden" src="images/assets/our_work/13_240x155.png" alt="..." style="opacity: 1;" width="240" height="155">
          </a>
          <div class="title" style="top: 155px; width: 220px;"></div>
        </div>
                    
        <div class="thumbHolder" data-title="title14" data-id-i="13" data-id-j="0" style="left: 500px; top: 0px;">  
          <a class="pp_content" href="images/assets/our_work/14_480x480.png" data-rel="prettyPhoto[gallery1]" title="title14">
            <img class="thumb_hidden" src="images/assets/our_work/14_240x155.png" alt="..." style="opacity: 1;" width="240" height="155">
          </a>
          <div class="title" style="top: 155px; width: 220px;"></div>
        </div>
                    
        <div class="thumbHolder" data-title="title15" data-id-i="14" data-id-j="0" style="left: 500px; top: 0px;">  
          <a class="pp_content" href="images/assets/our_work/15_480x480.png" data-rel="prettyPhoto[gallery1]" title="title15">
            <img class="thumb_hidden" src="images/assets/our_work/15_240x155.png" alt="..." style="opacity: 1;" width="240" height="155">
          </a>
          <div class="title" style="top: 155px; width: 220px;"></div>
        </div>
                    
        <div class="thumbHolder" data-title="title16" data-id-i="15" data-id-j="0" style="left: 500px; top: 0px;">  
          <a class="pp_content" href="images/assets/our_work/16_480x480.png" data-rel="prettyPhoto[gallery1]" title="title16">
            <img class="thumb_hidden" src="images/assets/our_work/16_240x155.png" alt="..." style="opacity: 1;" width="240" height="155">
          </a>
          <div class="title" style="top: 155px; width: 220px;"></div>
        </div>
                    
      </div>
                
    </div>
        
    <div class="thumbBackward thumb_hidden" style="cursor: pointer; display: block; opacity: 1;"><img src="images/icons/thumb_backward.png" alt="" width="21" height="31"></div> 
    <div class="thumbForward thumb_hidden" style="cursor: pointer; display: block; opacity: 1;"><img src="images/icons/thumb_forward.png" alt="" width="21" height="31"></div>  
           
  </div>

	<div id="seccion_pregunta"></div>


<div style="background-color: #3EA5D2;">
  <div class="jumbotron">
    <h1 style="margin: 2%;">&iquest;Alguna Pregunta?</h1>
    <div class="container">

      <div class="row lastpage">

        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 no-float">
          <p class="contactanos-title">Cont&aacute;ctanos</p>
          <hr class="divider"></hr>

          <address class="contactanos" style="color:#444;" >
            Email: <a href="mailto:contacto@displaymexico.com">contacto@displaymexico.com</a><br>
            <a href="mailto:contacto@displaymexico.com">displaymexico@prodigy.net.mx</a><br>
            <!-- 
            Tel: <a href="tel:+01-525-541-77777">5541 7777 y 78</a><br>
            -->
            Tel: <a href="tel:+01-525-541-77777">5541 7777</a><br>
            <a href="tel:+01-525-541-77778">5541 7778</a><br>
          </address>
          <br>
          <p class="title-form">Dejenos un comentario. O solo diga hola.</p>

          <div class="form-enviar">
            <form action="index.php" method="post">
              <fieldset class="form-group">
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <input class="form-control" type="text" name="name" required placeholder="Nombre" size="60%" oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('El nombre no puede ser vacio')"/>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="height: 10px;"></div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <input class="form-control" type="text" name="lastname" required placeholder="Apellido" size="60%" oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('El apellido no puede ser vacio')"/>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="height: 10px;"></div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <input class="form-control" type="email" name="email" required placeholder="Correo electronico" size="60%" oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Correo invalido')"/>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="height: 10px;"></div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <textarea class="form-control" name="comment" rows="8" placeholder="Escribe un comentario..." required oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Se requiere un comentario')"></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="height: 10px;"></div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <input class="btn btn-info btn-lg" type="submit" value="Enviar" />                
                  </div>
                </div>
              </fieldset>
            </form>
          </div>

        </div>

        <div class="col-xs-12 col-sm-1 col-md-1 col-lg-1 no-float" style="height: 10px; background-color: #0081C5;"></div>
        
        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 no-float">
          <p class="contactanos-title">Preguntas frecuentes</p>
          <hr class="divider"></hr>

          <ol class="accordion-ol"> 
            <li>
              <button class="accordion">&iquest;Tiene alcance en toda la Republica Mexicana?</button>
              <div class="panel">
                <p>Lorem ipsum...</p>
              </div>
            </li>

            <li style="margin-top: 0px;">
              <button class="accordion">&iquest;Que incluye el servicio?</button>
              <div class="panel">
                <p>Lorem ipsum...</p>
              </div>
            </li>

            <li style="margin-top: 0px;">
              <button class="accordion">&iquest;Que formas de pago manejan?</button>
              <div class="panel">
                <p>Lorem ipsum...</p>
              </div>
            </li>

            <li style="margin-top: 0px;">
              <button class="accordion">&iquest;Que tipo de materiales utilizan?</button>
              <div class="panel">
                <p>Lorem ipsum...</p>
              </div>
            </li>

            <li style="margin-top: 0px;">
              <button class="accordion">&iquest;Cuanto tiempo de anticipaci&oacute;n debo solicitar mi stand?</button>
              <div class="panel">
                <p>Lorem ipsum...</p>
              </div>
            </li>

            <li style="margin-top: 0px;">
              <button class="accordion">&iquest;En cuanto tiempo obtendr&eacute; respuesta para mi proyecto?</button>
              <div class="panel">
                <p>Lorem ipsum...</p>
              </div>
            </li>

          </ol>

        </div>
      </div>

    </div>
  </div>
</div>

<div>
  <div class="container">

    <div class="row">

      <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
        <hr class="divider"></hr>
      </div>
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1" style="font-size: 200%; font-family: Impact, Haettenschweiler, 'Franklin Gothic Bold', Charcoal, 'Helvetica Inserat', 'Bitstream Vera Sans Bold', 'Arial Black', 'sans serif';">
        <!-- 
        <p class="apostrofe">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"</p>
        -->
        <p class="apostrofe"></p>
      </div>
      <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
        <hr class="divider"></hr>
      </div>

    </div>

    <div class="row">

      <div class="container">
        <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11 col-centered">
          <p class="compromiso">Estamos comprometidos con beneficiar a nuestros clientes generando un equipo para lograr el &eacute;xito juntos</p>
          <img class="logo-footer" src="images/assets/footer/icon/logotype horizontal.png" border="0">
        </div>
      </div>
    </div>

  </div>
</div>

<div class="jumbotron">
</div>

<footer>
  <script type="text/javascript">
    var acc = document.getElementsByClassName("accordion");
    var i;

    /*
    for (i = 0; i < acc.length; i++) {
        acc[i].onclick = function(){
            //Toggle between adding and removing the "active" class, to highlight the button that controls the panel 
            this.classList.toggle("active");

            //Toggle between hiding and showing the active panel
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        }
    }
    */


    //Animated version
    for (i = 0; i < acc.length; i++) {
      acc[i].onclick = function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight){
          panel.style.maxHeight = null;
        } else {
          panel.style.maxHeight = panel.scrollHeight + "px";
        } 
      }
    }

  </script>
</footer>

<?php

// Email address verification
function isEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

if($_POST) {

    $mail = new PHPMailer;

    //$mail->SMTPDebug = 3;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'jaguzmang@gmail.com';                 // SMTP username
    $mail->Password = 'pass';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    $mail->isHTML(true);                                  // Set email format to HTML

    // Enter the email where you want to receive the message
    $emailTo = 'jaguzmang@gmail.com';
    //$emailTo = 'contacto@displaymexico.com';
        
    $name = addslashes(trim($_POST['name']));
    $lastname = addslashes(trim($_POST['lastname']));
    $email = addslashes(trim($_POST['email']));
    $comment = addslashes(trim($_POST['comment']));

    $array = array( 
                    'nameMessage' => '', 'lastnameMessage' => '',
                    'emailMessage' => '', 'commentMessage' => ''
                  );

    if($name == '') {
        $array['nameMessage'] = 'Nombre no valido';
    }
    
    if($lastname == '') {
        $array['lastnameMessage'] = 'Apellido no valido';
    }
    
    if(!isEmail($email)) {
        $array['emailMessage'] = 'Correo invalido!';
    }

    if($comment == '') {
        $array['commentMessage'] = 'Comentario no valido';
    }
    
    $message = "<h3 style='color: #000000;'>Comentario</h3>
                <div style='margin:0px;padding:0px;width:5%;box-shadow: 10px 10px 5px #888888;border:1px solid #000000;-moz-border-radius-bottomleft:0px;
                                -webkit-border-bottom-left-radius:0px;border-bottom-left-radius:0px;-moz-border-radius-bottomright:0px;
                                -webkit-border-bottom-right-radius:0px;border-bottom-right-radius:0px;-moz-border-radius-topright:0px;
                                -webkit-border-top-right-radius:0px;border-top-right-radius:0px;-moz-border-radius-topleft:0px;
                                -webkit-border-top-left-radius:0px;border-top-left-radius:0px;'>
                    <table style='border-collapse: collapse;border-spacing: 0;width:100%;height:100%;margin:0px;padding:0px;'>
                        <tr style='background-color:#ffaaaa;'> 
                            <td style='vertical-align:middle;border:1px solid #000000;border-width:1px 1px 1px 0px;text-align:left;
                            padding:7px;font-size:10px;font-family:Arial;font-weight:normal;color:#000000;'>
                                <label>Nombre</label>
                            </td>
                            <td style='vertical-align:middle;border:1px solid #000000;border-width:1px 1px 1px 1px;text-align:left;
                            padding:7px;font-size:10px;font-family:Arial;font-weight:normal;color:#000000;'>
                                <label>$name</label>
                           </td>
                        </tr>
                        <tr style='background-color:#ffffff;'> 
                            <td style='vertical-align:middle;border:1px solid #000000;border-width:1px 1px 1px 0px;text-align:left;
                            padding:7px;font-size:10px;font-family:Arial;font-weight:normal;color:#000000;'>
                                <label>Apellido</label>
                            </td>
                            <td style='vertical-align:middle;border:1px solid #000000;border-width:1px 1px 1px 1px;text-align:left;
                            padding:7px;font-size:10px;font-family:Arial;font-weight:normal;color:#000000;'>
                                <label>$lastname</label>
                           </td>
                        </tr>
                        <tr style='background-color:#ffaaaa;'> 
                            <td style='vertical-align:middle;border:1px solid #000000;border-width:0px 1px 1px 0px;text-align:left;
                            padding:7px;font-size:10px;font-family:Arial;font-weight:normal;color:#000000;'>
                                <label>Correo electronico</label>
                            </td>
                            <td style='vertical-align:middle;border:1px solid #000000;border-width:0px 1px 1px 0px;text-align:left;
                            padding:7px;font-size:10px;font-family:Arial;font-weight:normal;color:#000000;'>
                                <label>$email</label>
                           </td>
                        </tr>
                        <tr style='background-color:#ffffff;'> 
                            <td style='vertical-align:middle;border:1px solid #000000;border-width:0px 1px 1px 0px;text-align:left;
                            padding:7px;font-size:10px;font-family:Arial;font-weight:normal;color:#000000;'>
                                <label>Comentario</label>
                            </td>
                            <td style='vertical-align:middle;border:1px solid #000000;border-width:0px 1px 1px 0px;text-align:left;
                            padding:7px;font-size:10px;font-family:Arial;font-weight:normal;color:#000000;'>
                                <label>$comment</label>
                           </td>
                        </tr>
                    </table>
                </div>
               ";
    
    if( 
        $name != '' && isEmail($email) 
        && $lastname != '' && $comment != '' 
    ) {
        // Send email
        //$headers = "From: " . $clientEmail . " <" . $clientEmail . ">" . "\r\n" . "Reply-To: " . $clientEmail;
        //mail($emailTo, $name . " FMJJ registro torneo", $message, $headers);
        $mail->setFrom($email, 'Display Mexico');
        $mail->addReplyTo($email, 'No responder este correo');
        $mail->addAddress($emailTo, $name);     // Add a recipient
        $mail->Subject = $name . " Display Mexico comentario";
        $mail->Body    = $message;
        $mail->AltBody = $message;

        if(!$mail->send()) {
            //echo 'Message could not be sent.';
            //echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            //echo 'Message has been sent';
        }
        
    }

    //echo json_encode($array);
       
}

?>

</body>
</html>
