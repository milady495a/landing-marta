<?php

  require 'php/functions.php';
  require 'php/db.php';

  $twitter = "https://twitter.com/MartaTornero";
  $facebook = "https://www.facebook.com/writermuse/";
  $linkedin = "https://www.linkedin.com/in/marta-tornero-rubio";

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Marta Tornero | Literatura &amp; web</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Blog personal de Marta Tornero Rubio: escritura, literatura, creatividad, marketing, web, crecimiento personal y cualquier otra cosa que le apasione (para bien o para mal).">
  <meta name="author" content="Marta Tornero Rubio">
  <meta name="keywords" content="escritura, literatura, creatividad, marketing, web, crecimiento personal">
  <meta name="publisher" content="Marta Tornero Rubio">
  <meta name="city" content="Valencia">
  <meta name="country" content="ES">

  <!-- Favicon -->
  <link rel="icon" href="<?= asset('img/fav/mtornero.png', '') ?>" type="image/png">

  <link rel="stylesheet" href="<?= asset('bootstrap/dist/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="css/agency.css">

  <script async src="https://kit.fontawesome.com/4f70bfe0b1.js" crossorigin="anonymous"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
  <![endif]-->

</head>

<body id="page-top" class="index">

  <?php

    include 'section-barra-superior.php';
    include 'section-portada.php';

    // include 'section-gatetes.php';

    include 'section-conversacion.php';
    include 'section-portfolio.php';

    // include 'section-formacion.php';
    // include 'section-sobre-mi.php';
    // include 'section-testimonios.php';
    // include 'section-descripcion.php';

    // <!-- Contact Section (JS cargado al final)-->
    // <div class="typeform-widget" id="contact" data-url="https://milady495a.typeform.com/to/OEhfrY" style="width:100%;height:750px"></div>

    include 'section-twitter.php';
    include 'section-desplegables.php';

    include 'section-conversacion-final.php';

    // include 'section-recursos-gratis.php';
  ?>


  <?php /*
  */ ?>

  <?php include 'section-footer.php' ?>

  <script src="<?= asset('jquery/dist/jquery.min.js') ?>"></script>
  <script src="<?= asset('bootstrap/dist/js/bootstrap.min.js') ?>"></script>
  <script src="<?= asset('isotope-layout/dist/isotope.pkgd.min.js') ?>"></script>
  <script src="<?= asset('imagesloaded/imagesloaded.pkgd.min.js') ?>"></script>
  <script src="<?= asset('typeit/dist/typeit.min.js') ?>"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha256-z6FznuNG1jo9PP3/jBjL6P3tvLMtSwiVAowZPOgo56U=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>


  <script>

    // Funciones JavaScript para que funcione la pagina
    !function(t){"use strict";t("a.page-scroll").bind("click",function(a){var o=t(this);t("html, body").stop().animate({scrollTop:t(o.attr("href")).offset().top-50},1250,"easeInOutExpo"),a.preventDefault()}),t("body").scrollspy({target:".navbar-fixed-top",offset:51}),t(".navbar-collapse ul li a").click(function(){t(".navbar-toggle:visible").click()}),t("#mainNav").affix({offset:{top:100}})}(jQuery);

    // Encendemos wow, such easy!
    new WOW().init();

    // Esperamos a que cargen las imagenes del portfolio
    $('.grid').imagesLoaded( function() {

      // Encendemos isotope
      var $grid = $('.grid').isotope({
        // options
        itemSelector: '.grid-item',
        layoutMode: 'fitRows'
      });

      // funcion molona para que solo tengas que preocuparte del html :)
      // Coge el valor "data-filter" de los botones de 'filter-button-group', lo busca en las clases de los proyectos y los filtra
      $('.filter-button-group').on( 'click', 'button', function() {

        // Ponemos todos los rojos a verdes
        $(".filter-button-group button.btn-secondary").removeClass("btn-secondary").addClass("btn-primary btn-sm");

        // Ponemos rojo el seleccionado
        $(this).removeClass("btn-primary btn-sm").addClass("btn-secondary");

        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue });
      });
    });

    // Encendemos TypeIt
    new TypeIt('.type-it', {
      strings: [
        'Escritura',
        'Corrección',
        'Informes de lectura',
        'Marketing',
        'Redacción',
        'Maquetación',
        'Diseño web',
        'Critica literaria'
      ],
      breakLines: false,
      // speed: 100,
      loop: true
    });

    // // Typeform load (carga del formulario de contacto)
    // (function(){var qs,js,q,s,d=document,gi=d.getElementById,ce=d.createElement,gt=d.getElementsByTagName,id="typef_orm",b="https://s3-eu-west-1.amazonaws.com/share.typeform.com/";if(!gi.call(d,id)){js=ce.call(d,"script");js.id=id;js.src=b+"widget.js";q=gt.call(d,"script")[0];q.parentNode.insertBefore(js,q)}})()

    // Lazy load images
    window.addEventListener('load', function() {
      var allimages= document.getElementsByTagName('img');
      for (var i=0; i<allimages.length; i++) {
        if (allimages[i].getAttribute('data-src')) {
          allimages[i].setAttribute('src', allimages[i].getAttribute('data-src'));
        }
      }
    }, false)

  </script>

</body>
</html>
