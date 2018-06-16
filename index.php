<?php require 'datos/funciones.php' ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Marta Tornero | Literatura &amp; web</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="¿Tienes una idea o un libro? Te ayudo a que llegue a tu público con el mismo entusiasmo que tú sentiste cuando se te encendió la bombilla. Querrán más de ti.">
  <meta name="author" content="Marta Tornero">
  <meta name="classification" content="Soy asesora, correctora, copywriter... Todo está unido: el copywriting y la literatura van de plasmar lo que te emociona, que tus lectores disfruten y quieran más de ti. Creo que el mundo está lleno de grandes ideas que necesitan un empujoncito, y me honra poder trabajar con personas como tú que quieren hacerlas realidad. Pero, ojo, tú también vas a trabajar. Necesito tu entusiasmo, tu inspiración y tu historia para hacerles llegar a tus lectores esa idea que llevas dentro y necesitas sacar. ¿Qué has venido a ofrecer al mundo?">
  <meta name="keywords" content="Literatura, corrección, asesoría literaria, copywriting, web">
  <meta name="publisher" content="Marta Tornero">
  <meta name="zipcode" content="46006">
  <meta name="city" content="Valencia">
  <meta name="country" content="ES">

  <meta property="og:title" content="Marta Tornero | Literatura &amp; web" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="http://mtornero.com" />
  <meta property="og:image" content="http://mtornero.com/vids/mt.jpg" />
  <meta property="og:description" content="¿Tienes una idea o un libro? Te ayudo a que llegue a tu público con el mismo entusiasmo que tú sentiste cuando se te encendió la bombilla. Querrán más de ti." />
  <meta property="og:locale" content="es_ES" />
  <meta property="og:video" content="http://mtornero.com/vids/mt.mp4" />

  <!-- Favicon -->
  <link rel="icon" href="img/fav/mtornero.png" type="image/png">

  <!-- Bootstrap Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" integrity="sha256-j+P6EZJVrbXgwSR5Mx+eCS6FvP9Wq27MBRC/ogVriY0=" crossorigin="anonymous" />

  <link href="css/agency.css?v=2" rel="stylesheet">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
  <![endif]-->

</head>

<body id="page-top" class="index">

  <!-- Navigation -->
  <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand page-scroll" id="logo" href="#page-top">
          <span style="font-family:Yesteryear; font-size:34px; color:#C277DF">
            Marta
          </span>
          <span style="font-family:Roboto Slab; font-size:22px; color:white">
            TORNERO
          </span>
        </a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li class="hidden"><a href="#page-top"></a></li>
          <li><a class="page-scroll" href="#services">Servicios</a></li>
          <li><a class="page-scroll" href="#portfolio">Porfolio</a></li>
          <li><a class="page-scroll" href="#formacion">Formación</a></li>
          <li><a class="page-scroll" href="#about">Sobre mí</a></li>
          <li><a class="page-scroll" href="#testimonios">Testimonios</a></li>
          <li><a class="page-scroll" href="#contact">Contacta conmigo</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- data-vide-bg es la url del video (sin la extensión (.mp4))  -->
  <header id="vid" data-vide-bg="<?= isMobile() ? 'poster: vids/mtdark' : 'mp4: vids/mtdark, poster: vids/mtdark'?>" data-vide-options="posterType: jpg">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in">¿Tienes una idea o una historia? </div>
        <div class="intro-heading">Es tu momento.</div>
        <a href="#services" class="page-scroll btn btn-xl">Realízala</a>
      </div>
    </div>
  </header>

  <!-- Services Section -->
  <section id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading">Lo que hago</h2>
          <h3 class="section-subheading text-muted">Entre dos es más fácil llevarse el gato al agua. Esto es todo lo que puedo hacer por ti:</h3>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-3 wow slideInUp">
          <img class="img-circle img-responsive img-centered" src="img/services/cat_2.gif" alt="gato leyendo">
          <h4 class="service-heading">Asesoría literaria</h4>
          <p class="text-muted">Te ayudo a escribir tu libro mejor, o <b>tu mejor libro</b>. Como lectora profesional, te diré qué funciona y qué no, y qué puedes hacer para remediarlo.</p>
        </div>
        <div class="col-md-3 wow slideInUp" data-wow-delay="0.1s">
          <img class="img-circle img-responsive img-centered" src="img/services/cat_3.gif" alt="gato escribiendo ordenador">
          <h4 class="service-heading">Corrección</h4>
          <p class="text-muted">Una <b>buena corrección es invisible</b>, como una casa decorada con gusto. Una mala corrección es lo primero y a menudo lo último que lee tu público.</p>
        </div>
        <div class="col-md-3 wow slideInUp" data-wow-delay="0.2s">
          <img class="img-circle img-responsive img-centered" src="img/services/cat_1.gif" alt="gato escribiendo ordenador rápido">
          <h4 class="service-heading">Copywriting</h4>
          <p class="text-muted">Escribo el <i>copy</i> de tu web y contenidos para tu audiencia. Descubrimos qué necesitan y cómo dárselo. El diseño atrae, pero <b>las palabras venden</b>. </p>
        </div>
        <div class="col-md-3 wow slideInUp" data-wow-delay="0.3s">
          <img class="img-circle img-responsive img-centered" src="img/services/nocat_1.gif" alt="mono trabajando ordenador">
          <h4 class="service-heading">Diseño y asesoría web</h4>
          <p class="text-muted">Un buen <i>copy</i> + un diseño profesional = <b>autoridad en el mercado</b>. La programación es cosa de mi chico, yo solo miro boquiabierta.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Grid Section -->
  <section id="portfolio" class="bg-light-gray">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center" >
          <h2 class="section-heading">Porfolio</h2>
          <h3 class="section-subheading text-muted">Algunas cosillas que he hecho.</h3>
        </div>
      </div>
      <!-- Bloque de botones isotope, FUNCIONA PORQUE TIENE LA CLASE 'filter-button-group' !! -->
      <!-- <p><small>(Pincha para filtrar)</small></p> -->
      <div class="row button-group filter-button-group text-center">
        <button class="btn btn-secondary" data-filter="*">Todos</button>
        <button class="btn btn-sm btn-primary" data-filter=".web">Web</button>
        <button class="btn btn-sm btn-primary" data-filter=".copywriting">Copywriting</button>
        <button class="btn btn-sm btn-primary" data-filter=".marketing">Marketing</button>
        <button class="btn btn-sm btn-primary" data-filter=".asesoria">Asesoría literaria</button>
        <button class="btn btn-sm btn-primary" data-filter=".correccion">Corrección</button>
        <button class="btn btn-sm btn-primary" data-filter=".academico">Académico</button>

        <!-- <button class="btn btn-sm btn-primary" data-filter=":not(.a_literaria)">not a_literaria</button> -->
        <!-- <button class="btn btn-sm btn-primary" data-filter=".a_literaria:not(.copywritting)">a_literaria but not copywritting</button> -->
      </div>
      <!-- Grid de portfolios filtrados por isotope -->
      <div class="row grid">
        <div class="col-md-25 col-sm-4 portfolio-item grid-item asesoria correccion literatura">
          <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <h4>Trescientos años</h4>
              </div>
            </div>
            <img src="img/portfolio/300a_450.jpg" class="img-responsive" alt="asesoría literaria y corrección">
          </a>
        </div>
        <div class="col-md-25 col-sm-4 portfolio-item grid-item copywriting web marketing">
          <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <h4>Centro Maná</h4>
              </div>
            </div>
            <img src="img/portfolio/centromana.jpg" class="img-responsive" alt="copywriting marketing">
          </a>
        </div>
        <div class="col-md-25 col-sm-4 portfolio-item grid-item asesoria correccion literatura">
          <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <h4>Amanecer en Zurima</h4>
              </div>
            </div>
            <img src="img/portfolio/aez_450_t.jpg" class="img-responsive" alt="asesoría literaria corrección">
          </a>
       </div>
       <div class="col-md-25 col-sm-4 portfolio-item grid-item correccion academico">
          <a href="#portfolioModal8" class="portfolio-link" data-toggle="modal">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
               <h4>Oxford DNB</h4>
              </div>
            </div>
            <img src="img/portfolio/oxfdnb_450_t.jpg" class="img-responsive" alt="corrección ortotipográfica">
          </a>
        </div>

        <div class="col-md-25 col-sm-4 portfolio-item grid-item academico correccion">
          <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <h4>Race and Racism in Morrison</h4>
              </div>
            </div>
            <img src="img/portfolio/racism_450_t.jpg" class="img-responsive" alt="corrección ortotipográfica">
          </a>
        </div>
        <div class="col-md-25 col-sm-4 portfolio-item grid-item correccion web">
          <a href="#portfolioModal7" class="portfolio-link" data-toggle="modal">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <h4>Instituto Valenciano de Terapias Naturales</h4>
              </div>
            </div>
            <img src="img/portfolio/ivtn_450_t.jpg" class="img-responsive" alt="asesoría web corrección">
          </a>
        </div>
        <div class="col-md-25 col-sm-4 portfolio-item grid-item asesoria">
          <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <h4>Belleza y náusea</h4>
              </div>
            </div>
            <img src="img/portfolio/byn_450.jpg" class="img-responsive" alt="informe de lectura">
          </a>
        </div>
         <div class="col-md-25 col-sm-4 portfolio-item grid-item literatura asesoria">
          <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <h4>Dreamlander</h4>
              </div>
            </div>
            <img src="img/portfolio/dl_450_t.jpg" class="img-responsive" alt="informe de lectura editorial">
          </a>
        </div>
        <div class="col-md-25 col-sm-4 portfolio-item grid-item academico correccion">
          <a href="#portfolioModal10" class="portfolio-link" data-toggle="modal">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                 <h4>Functionalism and Minimalism</h4>
              </div>
            </div>
            <img src="img/portfolio/grammaressay.jpg" class="img-responsive" alt="copyediting corrección de estilo editing">
          </a>
        </div>
        <div class="col-md-25 col-sm-4 portfolio-item grid-item correccion asesoria literatura">
          <a href="#portfolioModal9" class="portfolio-link" data-toggle="modal">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                 <h4>Cena informal</h4>
              </div>
            </div>
            <img src="img/portfolio/cenainformal.jpg" class="img-responsive" alt="asesoría literaria corrección">
          </a>
        </div>
        <div class="col-md-25 col-sm-4 portfolio-item grid-item copywriting web marketing">
          <a href="#portfolioModal12" class="portfolio-link" data-toggle="modal">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <h4>The Body Massamagrell</h4>
              </div>
            </div>
            <img src="img/portfolio/the_body_massamagrell.jpg" class="img-responsive" alt="copywriting marketing">
          </a>
        </div>
        <div class="col-md-25 col-sm-4 portfolio-item grid-item asesoria literatura">
          <a href="#portfolioModal11" class="portfolio-link" data-toggle="modal">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <h4>Dioses enjaulados</h4>
              </div>
            </div>
            <img src="img/portfolio/diosesenjaulados.jpg" class="img-responsive" alt="asesoría literaria">
          </a>
        </div>
         <div class="col-md-25 col-sm-4 portfolio-item grid-item copywriting marketing web">
          <a href="#portfolioModal14" class="portfolio-link" data-toggle="modal">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
               <h4>TAGDisruptor</h4>
              </div>
            </div>
            <img src="img/portfolio/tagdisruptor.jpg" class="img-responsive" alt="copywriting marketing">
          </a>
        </div>
        <div class="col-md-25 col-sm-4 portfolio-item grid-item correccion">
          <a href="#portfolioModal15" class="portfolio-link" data-toggle="modal">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
               <h4>Barquitos</h4>
              </div>
            </div>
            <img src="img/portfolio/barquitos.jpg" class="img-responsive" alt="copywriting marketing">
          </a>
        </div>
        <div class="col-md-25 col-sm-4 portfolio-item grid-item correccion asesoria literatura web">
          <a href="#portfolioModal13" class="portfolio-link" data-toggle="modal">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
               <h4>WriterMuse</h4>
              </div>
            </div>
            <img src="img/portfolio/writermuse.jpg" class="img-responsive" alt="asesoría literaria corrección para escritores writermuse">
          </a>
        </div>
      </div>
      <!-- <div class="row text-center">
        <div class="col-sm-12 portfolio-item wow fadeIn" data-wow-duration="1.5s">
          <a href="#portfolioModal12" class="portfolio-link" data-toggle="modal">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fa fa-plus fa-3x"></i>
              </div>
            </div>
            <img src="img/portfolio/writermuse.jpg" class="img-responsive" alt="asesoría literaria corrección para escritores writermuse">
          </a>
          <div class="portfolio-caption">
            <h4>Asesoría y corrección para escritores</h4>
          </div>
        </div>
      </div> -->
    </div>
  </section>

  <!--Formación -->
  <section id="formacion">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center" >
          <h2 class="section-heading">Formación</h2>
          <h3 class="section-subheading text-muted">En la pared impresiona más. Para compensar, una ristra de iconos simpáticos.</h3>
        </div>
      </div>
      <!-- Card 1 -->
      <div class="col-sm-4 fixed-height">
        <div class="card">
          <div class="row">
            <div class="col-xs-2 text-right">
              <div class="pad-top">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x text-primary"></i>
                  <i class="fa fa-bookmark fa-stack-1x fa-inverse"></i>
                </span>
              </div>
            </div>
            <div class="col-xs-10">
              <h2 class="card-title">Informes de lectura</h2>
              <p class="card-text">Cálamo &amp; Cran. <br>Marzo 2017 </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-sm-4 fixed-height">
        <div class="card">
          <div class="row">
            <div class="col-xs-2 text-right">
              <div class="pad-top">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x text-primary"></i>
                  <i class="fa fa-book fa-stack-1x fa-inverse"></i>
                </span>
              </div>
            </div>
            <div class="col-xs-10">
              <h2 class="card-title">Lectura crítica</h2>
              <p class="card-text">Escritores.org. <br>Noviembre 2016</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="col-sm-4 fixed-height">
        <div class="card">
          <div class="row">
            <div class="col-xs-2 text-right">
              <div class="pad-top">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x text-primary"></i>
                  <i class="fa fa-diamond fa-stack-1x fa-inverse"></i>
                </span>
              </div>
            </div>
            <div class="col-xs-10">
              <h2 class="card-title">Corrección de estilo</h2>
              <p class="card-text">Cálamo &amp; Cran. <br>Septiembre 2016</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 7 -->
      <div class="col-sm-4 fixed-height">
        <div class="card">
          <div class="row">
            <div class="col-xs-2 text-right">
              <div class="pad-top">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x text-primary"></i>
                  <i class="fa fa-text-width fa-stack-1x fa-inverse"></i>
                </span>
              </div>
            </div>
            <div class="col-xs-10">
              <h2 class="card-title">Corrección ortotipográfica</h2>
              <p class="card-text">Trágora Formación. Agosto 2016</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col-sm-4 fixed-height">
        <div class="card">
          <div class="row">
            <div class="col-xs-2 text-right">
              <div class="pad-top">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x text-primary"></i>
                  <i class="fa fa-wrench fa-stack-1x fa-inverse"></i>
                </span>
              </div>
            </div>
            <div class="col-xs-10">
              <h2 class="card-title">Corrección de estilo <br> mentorship 10/10</h2>
              <p class="card-text">Society for Editors and Proofreaders (SfEP). Julio 2015</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 6 -->
      <div class="col-sm-4 fixed-height">
        <div class="card">
          <div class="row">
            <div class="col-xs-2 text-right">
              <div class="pad-top">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x text-primary"></i>
                  <i class="fa fa-search fa-stack-1x fa-inverse"></i>
                </span>
              </div>
            </div>
            <div class="col-xs-10">
              <h2 class="card-title">Corrección ortotipográfica<br>mentorship 10/10</h2>
              <p class="card-text">SfEP Junio 2015</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 8 -->
      <div class="col-sm-4 fixed-height">
        <div class="card">
          <div class="row">
            <div class="col-xs-2 text-right">
              <div class="pad-top">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x text-primary"></i>
                  <i class="fa fa-eyedropper fa-stack-1x fa-inverse"></i>
                </span>
              </div>
            </div>
            <div class="col-xs-10">
              <h2 class="card-title">Corrección de estilo: mérito</h2>
              <p class="card-text">The Publishing Training Centre. Julio 2014</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 10 -->
      <div class="col-sm-4 fixed-height">
        <div class="card">
          <div class="row">
            <div class="col-xs-2 text-right">
              <div class="pad-top">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x text-primary"></i>
                  <i class="fa fa-strikethrough fa-stack-1x fa-inverse"></i>
                </span>
              </div>
            </div>
            <div class="col-xs-10">
              <h2 class="card-title">Corrección ortotipográfica: mérito</h2>
              <p class="card-text">The Publishing Training Centre. Enero 2014</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 12 -->
      <div class="col-sm-4 fixed-height">
        <div class="card">
          <div class="row">
            <div class="col-xs-2 text-right">
              <div class="pad-top">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x text-primary"></i>
                  <i class="fa fa-industry fa-stack-1x fa-inverse"></i>
                </span>
              </div>
            </div>
            <div class="col-xs-10">
              <h2 class="card-title">Filología Inglesa</h2>
              <p class="card-text">Universidad de Valencia y Universidad de Nottingham. 2008-2013</p>
            </div>
          </div>
        </div>
      </div>
      <!-- CV No funciona el link de descarga!!!
       <div class="row">
        <div class="col-lg-12 text-center" style="padding-top: 20px">
      		<a href="https://drive.google.com/uc?export=download&id=0B4NvtOiT7aJXQjUtSTA4SFUwT0U" target="_blank" class="page-scroll btn btn-xl">Descargar CV</a>
        </div>
      </div>-->
    </div>
  </section>


  <!-- About Section -->
  <section id="about" class="bg-light-gray">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading">Sobre mí</h2>
          <h3 class="section-subheading text-muted">Mis chinchetas en el mapa.</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="timeline">
            <li class="wow fadeInLeft">
              <div class="timeline-image">
                <img class="img-circle img-responsive" src="img/about/x3_200.jpg" alt="Marta Tornero Rubio filología">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4><b>2012 Valencia</b></h4>
                  <h4 class="subheading">¡Arrivederci, universidad! ¡Hola, mundo!</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Estudié filología inglesa porque en el insti era de las que no atendía en clase y se pasaba el rato leyendo, así que no tenía otra opción. Cinco años se me hicieron pesados, tenía ganas de algo más movido… ¡Me voy de Erasmus!</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted wow fadeInRight">
              <div class="timeline-image">
                <img class="img-circle img-responsive" src="img/about/x4_200.jpg" alt="Marta Tornero Rubio erasmus Nottingham">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4><b>2013 Nottingham</b></h4>
                  <h4 class="subheading">Mi humilde residencia Erasmus</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Me voy a Inglaterra de Erasmus, me hago vegetariana, descubro las tareas domésticas y termino mi proyecto de carrera sobre narrativas virtuales (el único que me daba una excusa para jugar a videojuegos).</p>
                </div>
              </div>
            </li>
            <li class="wow fadeInLeft">
              <div class="timeline-image">
                <img class="img-circle img-responsive" src="img/about/x7_200.jpg" alt="Marta Tornero Rubio proofreader">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4><b>2013-2014 Glasgow</b></h4>
                  <h4 class="subheading">Siempre constipada... ¡maldito clima!</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">En la uni de Nottingham descubro lo que me gusta: la edición. Trabajo como autónoma de <i>proofreader</i>, pero el clima y los nubarrones me superan al final. <i>Teléfono... mi casa...</i></p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted wow fadeInRight">
              <div class="timeline-image">
                <img class="img-circle img-responsive" src="img/about/x5_cr_200.jpg" alt="Marta Tornero Rubio valencia">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4><b>2015 Valencia</b></h4>
                  <h4 class="subheading">¡España, te he echado tanto de menos!</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Vuelvo a Valencia y me reciben con los brazos abiertos y una paella. Estudio terapia, enseño inglés, aprendo a bailar swing, pero me falta algo: echo de menos corregir y la literatura.</p>
                </div>
              </div>
            </li>
            <li class="wow fadeInLeft">
              <div class="timeline-image">
                <img class="img-circle img-responsive" src="img/about/x12_200.jpg" alt="Marta Tornero Rubio correctora">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4><b>2016-2017 Valencia, el hogar</b></h4>
                  <h4 class="subheading">Empieza lo bueno :)</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Empiezo a formarme como correctora en castellano y tengo una idea: un sitio web donde los escritores puedan aprender a inspirarse a sí mismos y a planear su novela de forma más eficiente: <a href="http://www.writermuse.es">WriterMuse.</a></p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted wow fadeInUp text-center">
              <a href="#contact" class="page-scroll btn btn-lg btn-primary" style="padding:68px 23px;border-radius:50%">¿Trabajamos<br>juntos?</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section id="testimonios">
    <div class="container">
      <div class="row">
        <div class="col-sm-1 hidden-xs" style="padding-top:100px">
          <button type="button" class="btn btn-md btn-default wow shake" data-wow-delay="1.1s" onclick="prevSlide();stopSlider()">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
          </button>
        </div>
        <div class="col-sm-10">

          <!-- Primer Slide -->
          <div class="row" id="slider_1">
            <div class="col-lg-4">
              <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/testimonios/testimonio_aroa_250.png" alt="Aroa Fernández">
            </div>
            <div class="col-lg-8">
              <p class="slider_text" style="padding-bottom: 10px">
                <i class="fa fa-fw fa-quote-right" aria-hidden="true"></i>
                Marta es una profesional excelente, tanto por su dedicación a los proyectos en los que se embarca, como en eficacia y rapidez. El trabajo de edición que ha realizado para nuestra empresa ha sido más de lo que nosotros teníamos pensado y nos ha ayudado a replantear algunos aspectos de nuestra web y nos ha permitido adecuarla a nuestras actuales necesidades.
              </p>
              <p class="slider_text-author">
                Aroa Fernández
              </p>
              <p class="slider_text-source">
                aroafernandez.com
              </p>
            </div>
          </div>

          <!-- Segundo Slide -->
          <div class="row" id="slider_2" style="display:none">
            <div class="col-lg-4">
              <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/testimonios/testimonio_isa_250.png" alt="Isabel Llano">
            </div>
            <div class="col-lg-8">
              <p class="slider_text" style="padding-bottom: 10px">
                <i class="fa fa-fw fa-quote-right" aria-hidden="true"></i>
                A veces desconocemos el valor de algunas profesiones. Con el afán de estar al día y aunar criterios contactamos con Marta Tornero para que nos hiciera una revisión de los textos, sobre los que aportó otra mirada y trabajó de manera exhaustiva. Gracias a ella me di cuenta de todo lo que podíamos mejorar y he aprendido a valorar esa otra visión: la que aporta un profesional.
              </p>
              <p class="slider_text-author">
                Isabel Llano
              </p>
              <p class="slider_text-source">
                Instituto Valenciano de Terapias Naturales
              </p>
            </div>
          </div>

          <!-- Tercer Slide -->
          <div class="row" id="slider_3" style="display:none">
            <div class="col-lg-4">
              <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/testimonios/testimonio_dilara_250.png" alt="Sevim Dilara">
            </div>
            <div class="col-lg-8">
              <p class="slider_text" style="padding-bottom: 10px">
                <i class="fa fa-fw fa-quote-right" aria-hidden="true"></i>
                Your comments were amazing and really helped me. It’s difficult to spot your own mistakes in a paper that you have read so many times, but I was surprised that I still had that many typos and other grammar errors. I’m really amazed by your skills and the job you did. Thank you!
              </p>
              <p class="slider_text-author">
                Sevim Dilara
              </p>
              <p class="slider_text-source">
                Postgraduate in English Literature at University of Heidelberg
              </p>
            </div>
          </div>

          <!-- Cuarto Slide -->
          <div class="row" id="slider_4" style="display:none">
            <div class="col-lg-4">
              <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/testimonios/testimonio_gregorio_250.png" alt="Gregorio Bruno">
            </div>
            <div class="col-lg-8">
              <p class="slider_text" style="padding-bottom: 10px">
                <i class="fa fa-fw fa-quote-right" aria-hidden="true"></i>
                Marta me sugirió posibles soluciones para las partes de la historia que no terminaban de encajar y me ayudó a concretar los personajes, haciéndolos creíbles y consistentes, respetando la idea y la voz original. Es un placer trabajar con Marta, me ha convencido como profesional y me ha ganado como persona. Como profesional hace un gran trabajo, como persona sabe comunicar con empatía, compartiendo la emoción de dar forma a una obra.
              </p>
              <p class="slider_text-author">
                Gregorio Bruno
              </p>
              <p class="slider_text-source">
                Autor de ciencia ficción
              </p>
            </div>
          </div>

          <!-- Quinto Slide -->
          <div class="row" id="slider_5" style="display:none">
            <div class="col-lg-4">
              <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/testimonios/testimonio_javi_250.png" alt="Javier Cebrián">
            </div>
            <div class="col-lg-8">
              <p class="slider_text" style="padding-bottom: 10px">
                <i class="fa fa-fw fa-quote-right" aria-hidden="true"></i>
                Marta ha editado uno de mis cuentos aportando una gran cantidad de observaciones que me han resultado muy enriquecedoras en cuanto al estilo, sintaxis, semántica y la corrección de múltiples aspectos. Es un trabajo realizado con rigurosidad y eficacia. ¡Ha sido de gran ayuda!
              </p>
              <p class="slider_text-author">
                Javier Cebrián
              </p>
              <p class="slider_text-source">
                Autor de ciencia ficción y policíaca
              </p>
            </div>
          </div>

          <!-- Sexto Slide -->
          <div class="row" id="slider_6" style="display:none">
            <div class="col-lg-4">
              <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/testimonios/testimonio_monica_250.png" alt="Mónica Robles">
            </div>
            <div class="col-lg-8">
              <p class="slider_text" style="padding-bottom: 10px">
                <i class="fa fa-fw fa-quote-right" aria-hidden="true"></i>
                Marta me ayudó a sacar mejor partido de lo escrito con sugerencias y consejos acertados, siendo en todo momento respetuosa con lo escrito. Destacaría su tenacidad, siempre mirando de ayudar en lo que haga falta y facilitando el trabajo al escritor. Para finalizar quisiera agradecer sus palabras de ánimo cuando estaba desanimada.
              </p>
              <p class="slider_text-author">
                Mónica Robles Lambies
              </p>
              <p class="slider_text-source">
                Autora de <i> Valentina </i> y otros relatos cortos
              </p>
            </div>
          </div>

          <!-- Séptimo Slide -->
          <div class="row" id="slider_7" style="display:none">
            <div class="col-lg-4">
              <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/testimonios/testimonio_manuel_250.png" alt="Manuel Ruiz del Corral">
            </div>
            <div class="col-lg-8">
              <p class="slider_text" style="padding-bottom: 10px">
                <i class="fa fa-fw fa-quote-right" aria-hidden="true"></i>
                Marta me ayudó a delimitar claramente las virtudes de mi libro y me enseñó a proyectar mis ideas a la sociedad sin renunciar a los valores que me hicieron escribirlas. Su flexibilidad, seriedad, y sobre todo su empatía y capacidad intelectual la hacen destacar, porque Marta sabe escucharte y desenredar la madeja de aquello que intuyes que quieres, aunque no seas capaz de verlo aún. Y, desde el primer día, es capaz de aportarte un nivel de confianza, respuesta y calidad de desempeño reservada a muy pocos profesionales.
              </p>
              <p class="slider_text-author">
                Manuel Ruiz del Corral
              </p>
              <p class="slider_text-source">
                Autor de <i> Ser digital: hacia una relación consciente con la tecnología</i>
              </p>
            </div>
          </div>

          <!-- Octavo Slide -->
          <div class="row" id="slider_8" style="display:none">
            <div class="col-lg-4">
              <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/testimonios/testimonio_walt_250.png" alt="Walther Glödstaf">
            </div>
            <div class="col-lg-8">
              <p class="slider_text" style="padding-bottom: 10px">
                <i class="fa fa-fw fa-quote-right" aria-hidden="true"></i>
                As someone who was always better at speaking than writing, Marta's services really helped me progress in my writing and played a huge part in me being published in my field and why I am now pursuing a very writing intensive career. I could not recommend her services enough!
              </p>
              <p class="slider_text-author">
                Walther Glödstaf
              </p>
              <p class="slider_text-source">
                Postgraduate in English Literature and Linguistics at University of Glasgow
              </p>
            </div>
          </div>

          <!-- Noveno Slide -->
          <div class="row" id="slider_9" style="display:none">
            <div class="col-lg-4">
              <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/testimonios/testimonio_diana_250.png" alt="Diana Sol Gamero">
            </div>
            <div class="col-lg-8">
              <p class="slider_text" style="padding-bottom: 10px">
                <i class="fa fa-fw fa-quote-right" aria-hidden="true"></i>
                Me impresionó su sensibilidad para preguntarse cuáles son las intenciones del escritor en cada aspecto de la novela: estructura, personajes, conflictos..., incluso aquellas menos conscientes. Sorprende la perspicacia de sus anotaciones y la profundidad a la que llega en su revisión. Consigue entender más allá de gustos personales lo que podrían sentir la mayoría de los lectores ante la lectura de un texto. Considero que esto distingue, más que ninguna otra cosa, a un excelente profesional. Me encantaría volver a trabajar con Marta.
              </p>
              <p class="slider_text-author">
                Diana Sol Gamero
              </p>
              <p class="slider_text-source">
                Autora de <i> Belleza y náusea</i>
              </p>
            </div>
          </div>

        </div>
        <div class="col-sm-1 hidden-xs" style="padding-top:100px">
          <button type="button" class="btn btn-md btn-default wow shake" data-wow-delay="1.1s" onclick="nextSlide();stopSlider()">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- Me Section -->
  <section id="descripcion" style="background-color: #ddd">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 text-center">
          <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/team/marta_tornero_rubio_2.jpg" alt="Marta Tornero Rubio copywriter asesora literaria correctora">
        </div>
        <div class="col-lg-6 text-center">
          <h2 class="section-heading">¡Hola, soy Marta!</h2>
          <p style="padding-top: 30px"> Soy asesora, correctora, copywriter... Todo está unido: el copywriting y la literatura van de <b>plasmar lo que te emociona, que tus lectores disfruten y quieran más de ti. </b> </p>
          <p>Creo que el mundo está lleno de grandes ideas que necesitan un empujoncito, y me honra poder trabajar con personas como tú que quieren hacerlas realidad. </p>
          <p>Pero, ojo, <b>tú también vas a trabajar</b>. Necesito tu entusiasmo, tu inspiración y tu historia para hacerles llegar a tus lectores esa idea que llevas dentro y necesitas sacar. </p>
          <p style="padding:20px 0">¿Qué has venido a ofrecer al mundo?</p>
          <a href="#contact" class="page-scroll btn btn-xl">Escribamos juntos</a>
        </div>
      </div>
    </div>
  </section>


  <!-- Clients Aside -->
  <aside class="clients">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img src="img/logos/ptc_200-50.jpg" class="img-responsive img-centered" alt="publishing training centre">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img src="img/logos/logo_sfep_200-50.jpg" class="img-responsive img-centered" alt="society for proofreaders and copyeditors sfep">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img src="img/logos/oup_logo_200-50.jpg" class="img-responsive img-centered" alt="oxford university press">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img src="img/logos/prh_logo_200-50.jpg" class="img-responsive img-centered" alt="penguin random house">
          </a>
        </div>
      </div>
    </div>
  </aside>

  <!-- Link to WM Section -->
  <section id="recursos-gratis" style="background-color: #a7a7a7">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 text-center">
          <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/musa_escritor.png" alt="WriterMuse recursos de escritura" style="padding-bottom: 30px">
        </div>
        <div class="col-lg-6 text-center" style="padding-top: 45px">
          <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/writermuse_libros.png" alt="WriterMuse recursos para escritores" style="padding-bottom: 30px">
          <a href="http://writermuse.es/recursos-de-escritura-gratuitos/" class="page-scroll btn btn-xl">Descarga mis recursos gratuitos</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section (JS cargado al final)-->
  <div class="typeform-widget" id="contact" data-url="https://milady495a.typeform.com/to/OEhfrY" style="width:100%;height:750px"></div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <span class="copyright">&copy; Marta Tornero Rubio 2017</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li><a href="https://twitter.com/MartaWriterMuse"><i class="fa fa-twitter"></i></a>
            </li>
            <li><a href="https://www.facebook.com/writermuse/"><i class="fa fa-facebook"></i></a>
            </li>
            <li><a href="https://www.linkedin.com/in/marta-tornero-rubio"><i class="fa fa-linkedin"></i></a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li><a href="privacidad.html">Política de privacidad</a>
            </li>
            <li><a href="cookies.html">Política de cookies</a>
            </li>
            <li><a href="avisolegal.html">Aviso legal</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Portfolio Modals -->
  <!-- Use the modals below to showcase details about your portfolio projects! -->

  <!-- Portfolio Modal 1 -->
  <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl">
            </div>
          </div>
        </div>
        <div class="container">
          <div class="modal-body">
            <!-- Project Details Go Here -->
            <h2>Trescientos años</h2>
            <p class="item-intro text-muted">Asesoría literaria / Corrección</p>
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <p><i>Trescientos años</i> es una novela de fantasía para adultos jóvenes en la que dos adolescentes viajan al pasado y se relacionan (con más o menos acierto) con la aristocracia inglesa del siglo dieciocho. Conocen a personajes singulares y viven aventuras trepidantes que ponen en juego su amistad y su forma de ver el mundo, todavía infantil. Es una novela de aventuras, pero especialmente de madurez.</p>
                <p>Para <i>Trescientos años</i> realicé primero una asesoría literaria en la que recomendaba ajustar las dos tramas principales para conseguir simetría entre sus protagonistas. También fue necesario revisar algunas subtramas y realizar pequeñas modificaciones a lo largo del libro para que el nuevo final que había propuesto funcionara. Era una novela que llevaba en el horno mucho tiempo y la autora había ido replanteándose el efecto que quería conseguir con ella, por lo que hizo falta ajustar varios capítulos para que el final concordara con el resto de la novela.</p>
                <p>En el segundo borrador me centré en las cuestiones ortotipográficas y de estilo. y unifiqué un estilo que, debido a largos años de concepción, había tenido altibajos y cambios de tono a lo largo de la novela.</p>

                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/300a_informe_3.jpg" alt="corrección de estilo literaria ejemplo">
                </div>
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/300a_informe_2.jpg" alt="corrección de estilo literaria ejemplo">
                </div>
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/300a_informe_1.jpg" alt="corrección de estilo literaria ejemplo">
                </div>
              </div>
            </div>
            <div class="thumbnail">
              <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/300a_corr_estilo.jpg" alt="corrección de estilo literaria ejemplo" style="padding-top:15px;">
            </div>
            <ul class="list-inline">
              <li>Fecha: Septiembre 2016</li>
              <li>Cliente: Sandra Pérez Estada</li>
              <li>Categoría: Asesoría literaria / Corrección</li>
            </ul>
            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar proyecto</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 2 -->
  <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl">
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="modal-body">
              <div class="col-lg-8 col-lg-offset-2">
                <h2>Amanecer en Zurima</h2>
                <p class="item-intro text-muted">Asesoría literaria / Corrección</p>
                <p><i>Amanecer en Zurima</i> es una novela de ciencia ficción ambientada en una colonia imperial humana en un espacio habitado, en su mayor parte, por extraterrestres de diversas razas. En el mundo de Lamia los disturbios amenazan con extinguir la delicada paz que los humanos han impuesto por métodos pacíficos pero opresivos.</p>
                <p> <i>Zurima</i> requería, para su primer borrador, un informe de lectura, en el que recomendé cambios estructurales que aligeraran el texto y lo llevaran a una conclusión más dramática, y añadidos que mejoraran la caracterización de ciertos personajes.</p>
                <p>Después realicé una intervención profunda en el segundo borrador. La autora había pedido una corrección que eliminara errores ortotipográficos y afinara la expresión y recortara allí donde había demasiado texto que enlenteciera el desarrollo.</p>
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/aez_informe_1.jpg" alt="corrección de estilo literaria ejemplo">
                </div>
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/aez_informe_2.jpg" alt="corrección de estilo literaria ejemplo">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/aez_corr_estilo.jpg" alt="corrección de estilo literaria ejemplo">
                </div>
              </div>
              <div class="col-lg-8 col-lg-offset-2">
                <ul class="list-inline">
                  <li>Fecha: Mayo 2016</li>
                  <li>Cliente: Daniela Sornís</li>
                  <li>Categoría: Asesoría literaria / Corrección</li>
                </ul>
                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar proyecto</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 3 -->
  <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl">
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2>Centro Maná</h2>
                <p class="item-intro text-muted">Copywriting / Marketing</p>
                <p>
                El Centro Maná es un centro de psicología integrativa en Jalón, Alicante, donde puedes acudir a sesiones de terapia y a talleres de un día o residenciales.</p>
                <p>Maite llevaba tiempo promocionando su centro por el boca a boca y por las redes sociales, pero no tenía un sistema definido para darse a conocer;  necesitaba una plataforma web para <b>promocionar el centro y atraer a potenciales clientes</b>.
                <p>Nos pusimos manos a la obra para definir sus objetivos con Centro Maná: queríamos convertirnos en una página de referencia en el sector de las terapias naturales y la salud psicológica y el lugar al que acudir para realizar terapia individual en los pueblos del interior de la comarca de la Marina Alta.</p>
                <p>Lo primero fue crear una web dinámica, con contenido orientado a los intereses de sus clientes en psicología y salud. <b>Una web funcional y atractiva es fundamental para generar autoridad</b>. Si bien mi clienta ya contaba con una base de clientes estable, el crecimiento era muy lento y no tenía manera de ampliar su mercado de forma consistente. </p>
                <p>Diseñé su web y redacté el <i>copy</i> de las páginas clave con información sobre el centro, sobre ella y sobre las actividades que allí se llevan a cabo. Ahora un visitante puede navegar por la web y conocer qué hace el centro y cómo puede ayudarle, y acceder a una sesión de consulta psicológica con solo introducir su e-mail.</p>
                <p>Actualmente Centro Maná cuenta con un boletín mensual y un sistema de automatización de contenidos para nuevos suscriptores. Algo <b>personal y eficaz que envía a cada cliente exactamente el contenido que necesita y las novedades que le interesan</b>.</p>
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/cm_web_8.jpg" alt="Copywriting terapias naturales psicología">
                </div>
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/cm_blog_3.jpg" alt="Copywriting terapias naturales psicología">
                </div>
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/cm_web_5.jpg" alt="copywriting diseño web terapias naturales psicología">
                </div>
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/cm_blog_2.jpg" alt="Copywriting terapias naturales psicología">
                </div>
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/cm_web_3.jpg" alt="copywriting diseño web terapias naturales psicología">
                </div>
                <ul class="list-inline">
                  <li>Fecha: Diciembre 2016</li>
                  <li>Cliente: María Teresa Femenía</li>
                  <li>Categoría: Copywriting / Marketing</li>
                </ul>
                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar proyecto</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 4 -->
  <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl">
            </div>
          </div>
        </div>
        <div class="container">
          <div class="modal-body">
            <!-- Project Details Go Here -->
            <h2>Dreamlander</h2>
            <p class="item-intro text-muted">Informe de lectura editorial</p>
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <p> Como lectora editorial, realizo análisis de libros para determinar si a la editorial le conviene publicarlos, por razones literarias y comerciales. Editoriales como Penguin Random House necesitan la ayuda de un lector profesional para cribar los libros que llegan a sus oficinas todos los días. En el caso de <i>Dreamlander</i>, se trataba de la propuesta de un traductor, por lo que leí la obra en inglés, junto con unos fragmentos traducidos anticipados por el traductor. </p>
                <p>Mi trabajo consiste en leer como leería el público ideal de una novela y analizar tanto los aspectos técnicos como la reacción que provoca en mí, porque la escritura tiene una intención emocional y experiencial, ante todo, y el efecto que provoca es lo que hace que un libro guste o no. </p>
                <p><i>Dreamlander</i> me entretuvo y me divirtió, y me emocionaron algunos pasajes, pero no se quedó dentro de mí como un buen libro hace. <i>Dreamlander</i> es una obra cuidadosamente compuesta, pero a la que le falta cierta madurez narrativa: la caracterización está forzada en algunos casos y el lector no termina de empatizar con personajes cuyos demonios interiores son desproporcionados e inverosímiles. Es altamente entretenida y cumple todas sus promesas, pero parece que la autora ha seguido demasiado de cerca su propia prescripción técnica y no ha dejado paso al arte para que le diera la chispa de la vida. </p>
                <p>Elaboré un informe de mi experiencia de lectura. Analicé la trama, el lenguaje, el estilo, etc., por sí mismos y en el contexto del mercado específico de la editorial, el sello Fantascy de Penguin Random House, y determiné que el éxito de la autora, sobre todo en otros ámbitos, podría aprovecharse para la publicación, pero que sería más provechoso vender sus manuales de escritura, los cuales ya habían conseguido un amplio seguimiento, sobre todo en Estados Unidos. </p>
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/dl_3.jpg" alt="informe de lectura editorial ejemplo">
                </div>
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/dl_2.jpg" alt="informe de lectura editorial ejemplo">
                </div>
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/dl_1.jpg" alt="informe de lectura editorial ejemplo">
                </div>
                <ul class="list-inline">
                  <li>Fecha: Abril 2017</li>
                  <li>Cliente: Penguin Random House</li>
                  <li>Categoría: Informe de lectura editorial</li>
                </ul>
                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar proyecto</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 5 -->
  <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl">
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="modal-body">
              <div class="col-lg-8 col-lg-offset-2">
                <!-- Project Details Go Here -->
                <h2>Race and racism in Toni Morrison</h2>
                <p class="item-intro text-muted"><i>Proofreading</i> - corrección ortotipográfica</p>
                <p><i>Race and racism in Toni Morrison</i> es una tesis doctoral, un documento que recoge años de trabajo, y por eso mi clienta había contactado conmigo para asegurarse de que estaba en el mejor estado posible antes de enviarlo a sus directores de tesis y publicarlo.</p>
                <p>Primero leí la tesis como un lector más y señalé los puntos que me resultaban confusos o ambiguos, donde mi clienta se había expresado menos claramente. Es fundamental en estos textos que <b>las ideas se desarrollen de forma coherente y que la pieza mantenga la cohesión estructural</b>. Una tesis se sostiene en sus ideas, y estas deben comunicarse con facilidad y de forma transparente.</p>
                <p>Mi cliente necesitaba una <b>revisión ortotipográfica que corrigiera su inglés y lo adecuara al estándar académico</b>, ya que ella no es angloparlante. También requería que unificara su estilo, pues la tesis había sido escrita a lo largo de varios meses y había algunas discordancias entre secciones. Al revisar el contenido le ayudé a encontrar omisiones, errores y áreas subdesarrolladas donde su argumentación flojeaba o entraba en contradicciones.</p>
              </div>
              <div class="col-lg-12">
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/pr_tesis_4.jpg" alt="corrección ortotipográfica tesis universitaria">
                </div>
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/pr_tesis_4.jpg" alt="corrección ortotipográfica tesis universitaria">
                </div>
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/pr_tesis_6.jpg" alt="corrección ortotipográfica tesis universitaria">
                </div>
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/pr_tesis_2.jpg" alt="corrección ortotipográfica tesis universitaria">
                </div>
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/pr_tesis_3.jpg" alt="corrección ortotipográfica tesis universitaria">
                </div>
                <div class="col-lg-8 col-lg-offset-2">
                  <ul class="list-inline">
                    <li>Fecha: Julio 2014</li>
                    <li>Cliente: Sevim Dilara</li>
                    <li>Categoría: <i>Proofreading</i> - corrección ortotipográfica</li>
                  </ul>
                  <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar proyecto</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- Portfolio Modal 6 -->
  <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl">
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2>Belleza y náusea</h2>
                <p class="item-intro text-muted">Asesoría literaria</p>
                <p><i>Belleza y náusea</i> es una novela de psicológica con tintes de ciencia ficción en la que se entrelazan tramas complejas y turbias que involucran a varias generaciones. Es un tipo de novela que requiere mucha sutileza y cuidado con la información que se desvela al lector, y en esto Diana hizo un trabajo excelente.</p>
                <p>Diana me encargó un informe de lectura para descubrir aquellos puntos donde fallaba, pues por más que la leía no podía encontrar el origen de esa sensación de insatisfacción. En el informe analicé las carencias que había descubierto, sobre todo en cuanto a la caracterización y la ambientación, y saqué a la superficie algunos aspectos de la novela que permanecían en la sombra: potencialidades que habían surgido, con o sin la intervención consciente de la autora, como la psique torcida del protagonista y su evolución a lo largo de la novela, o el ente maléfico que se insinuaba en la sombra del abuelo, una figura interesantísima y perturbadora, pero que no tenía suficiente impacto sobre el momento presente de la trama.</p>
                <p><i>Belleza y náusea</i> ha resultado ser una lectura que me sigue acompañando con algunas imágenes fascinantes y turbias, como la del caserón en las afueras de Venecia, y estoy segura de que su autora sabrá sacarle el máximo provecho a las recomendaciones del informe y explotar el poder evocador de la oscuridad que habita en sus personajes.</p>
              </div>
              </div>
              <div class="col-lg-12">
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/byn_informe_3.jpg" alt="asesoría literaria informe de lectura">
                </div>
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/byn_informe_4.jpg" alt="asesoría literaria informe de lectura">
                </div>
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/byn_informe_2.jpg" alt="asesoría literaria informe de lectura">
                </div>
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/byn_informe_1.jpg" alt="asesoría literaria informe de lectura">
                </div>
                </div>
                <div class="col-lg-8 col-lg-offset-2">
                <ul class="list-inline">
                  <li>Fecha: Marzo 2018</li>
                  <li>Cliente: Diana Soledad</li>
                  <li>Categoría: Asesoría literaria</li>
                </ul>
                </div>
                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar proyecto</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 6
  <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl">
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
              <div class="modal-body">
                <h2>Centro Maná</h2>
                <p class="item-intro text-muted">Diseño web / Copywriting</p>
                <p>El Centro Maná es un centro de psicología integrativa en Jalón, Alicante, donde puedes acudir a sesiones de terapia y a talleres de un día o residenciales.</p>
                <p>Mi clienta necesitaba una plataforma web para <b>promocionar el centro y atraer a potenciales clientes</b>. La otra característica clave de la web es que esta debía ser útil para sus suscriptores: a través de esta debían poder acceder a toda la información sobre eventos futuros y apuntarse a cualquier actividad en un par de clics.</p>
                <p><b>Una web funcional y atractiva es fundamental para generar autoridad</b>. Si bien mi clienta ya contaba con una base de clientes estable, el crecimiento era muy lento y no tenía manera de ampliar su mercado de forma consistente. </p>
                <p>Diseñé su web y redacté el <i>copy</i> de las páginas clave con información sobre el centro, sobre ella y sobre las actividades que allí se llevan a cabo. Ahora un visitante puede navegar por la web y conocer qué hace el centro y cómo puede ayudarle, y acceder a una sesión de consulta psicológica con solo introducir su e-mail.
                </p>
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/cm_web_8.jpg" alt="copywriting diseño web terapias naturales psicología">
                </div>
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/cm_web_3.jpg" alt="copywriting diseño web terapias naturales psicología">
                </div>
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/cm_web_5.jpg" alt="copywriting diseño web terapias naturales psicología">
                </div>
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/cm_web_7.jpg" alt="copywriting diseño web terapias naturales psicología">
                </div>
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/cm_web_6.jpg" alt="copywriting diseño web terapias naturales psicología">
                </div>
                <ul class="list-inline">
                  <li>Fecha: Octubre 2016</li>
                  <li>Cliente: María Teresa Femenía</li>
                  <li>Categoría: Diseño web / Copywriting</li>
                </ul>
                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar proyecto</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <!-- Portfolio Modal 7 -->
  <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl">
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2>Instituto Valenciano de Terapias Naturales</h2>
                <p class="item-intro text-muted">Corrección ortotipográfica / Asesoría web</p>
                <p>El Instituto Valenciano de Terapias Naturales contaba con una página web desde hacía años, pero sabía que no le estaba sacando el máximo provecho. Por otro lado, aunque publicaba semanalmente, su equipo de redactores trabajaba sin una guía de estilo ni una estrategia de contenidos definida que les ayudara a orientar las publicaciones a una venta concreta. </p>
                <p>Contactaron conmigo para que revisáramos juntos la web, para detectar dónde podría mejorar y adecuarse mejor a sus necesidades actuales: limpiamos los menús para facilitar la navegación, añadimos secciones bajo cada formación para que el lector no tuviera que rastrear la información y enfatizamos los beneficios para que el cliente potencial quisiera acceder a sus servicios. </p>
                <p>Analicé la web y creé una guía de estilo para editar el contenido y orientar a sus redactores. <b>Unificar el estilo es esencial para presentar una imagen cuidada</b>. La unicidad y la simetría a menudo pasan desapercibidas, pero su contrario es muy evidente y produce una impresión de descuido y de falta de seriedad y compromiso con la marca. </p>
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/ivtn_3.jpg" alt="Corrección ortotipográfica asesoría web terapias naturales">
                </div>
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/ivtn_1.jpg" alt="Corrección ortotipográfica asesoría web terapias naturales">
                </div>
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/ivtn_6.jpg" alt="Corrección ortotipográfica asesoría web terapias naturales">
                </div>
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/ivtn_4.jpg" alt="Corrección ortotipográfica asesoría web terapias naturales">
                </div>
                <ul class="list-inline">
                  <li>Fecha: Septiembre 2016</li>
                  <li>Cliente: Instituto Valenciano de Terapias Naturales</li>
                  <li>Categoría: Corrección ortotipográfica / Asesoría web</li>
                </ul>
                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar proyecto</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 8 -->
  <div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl">
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2>Oxford dictionary of national biography</h2>
                <p class="item-intro text-muted"><i>Proofreading</i> - corrección ortotipográfica</p>
                <p>El diccionario de biografía nacional (británica) de Oxford está siendo constantemente actualizado y cada día recibe nuevas entradas. <b>Cada entrada pasa por varias revisiones de manos de distintas personas</b>: el autor, el editor, los correctores, etc. </p>
                <p>Mi trabajo para Oxford University Press era el de revisar las entradas antes de que fueran añadidas a la página web, en busca de errores ortotipográficos, en primer lugar y, si se daba el caso, de errores factuales, omisiones o contradicciones.</p>
                <p>A pesar de que pasaba por los ojos de muchos profesionales, <b>no era extraño encontrar erratas e incluso problemas más serios</b> con el texto, como confusiones de nombres y fechas erróneas. Si encontraba algo así, le preguntaba al editor en un documento específico en el que se compilan todas los problemas y las dudas no resueltas (puedes ver más abajo un ejemplo).</p>
                <p>¡Nunca faltaba trabajo!</p>
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/oxforddnb_4.jpg" alt="corrección ortotipográfica proofreading oxford">
                </div>
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/oxforddnb_3.jpg" alt="corrección ortotipográfica proofreading oxford">
                </div>
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/oxforddnb_2.jpg" alt="corrección ortotipográfica proofreading oxford">
                </div>
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/oxforddnb_1.jpg" alt="corrección ortotipográfica proofreading oxford">
                </div>
                <ul class="list-inline">
                  <li>Fecha: Septiembre 2015</li>
                  <li>Cliente: Oxford University Press</li>
                  <li>Categoría: <i>Proofreading</i> - corrección ortotipográfica</li>
                </ul>
                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar proyecto</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 9 -->
  <div class="portfolio-modal modal fade" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl">
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2>Cena informal en casa</h2>
                <p class="item-intro text-muted">Asesoría literaria y corrección de estilo</p>
                <p><i>Cena informal en casa</i> es un relato de misterio con una ambientación soberbia: desde el primer minuto el lector siente extrañeza en un escenario que debería ser cómodo y hogareño, pero se relaja poco a poco en los pormenores de la cena y las conversaciones, hasta que, al final, una revelación le hace reinterpretar todo de una manera espeluznante. </p>
				<p>Javier ya tenía un relato excelente en el que todo funcionaba bien, pero le sugerí algunos cambios y añadidos que reforzaran el efecto que pretendía conseguir. El narrador estaba demasiado presente y el lector necesitaba ver sin su filtro las palabras directas de los personajes.</p>
				<p>Realicé una corrección a la vez que el informe, lo cual no es lo habitual, porque Javier quería conocer los estándares de corrección para la siguiente versión de la historia y para la novela en la que estaba trabajando.</p>
				</div>
            </div>
                <div class="col-lg-12">
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/cena2.jpg" alt="asesoría literaria corrección de estilo">
                </div>
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/cena1.jpg" alt="asesoría literaria corrección de estilo">
                </div>
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/cena3.jpg" alt="asesoría literaria corrección de estilo">
                </div>
                </div>
                <div class="col-lg-8 col-lg-offset-2">
                <ul class="list-inline">
                  <li>Fecha: Mayo 2017</li>
                  <li>Cliente: Javier Cebrián</li>
                  <li>Categoría: Asesoría literaria y corrección de estilo</li>
                </ul>
                </div>
                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar proyecto</button>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- Portfolio Modal 10 -->
  <div class="portfolio-modal modal fade" id="portfolioModal10" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl">
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2>Functionalism and Minimalism in Grammar</h2>
                <p class="item-intro text-muted"><i>Copy-editing</i> – corrección de estilo y contenido</p>
                <p>Walther requería una corrección profunda que revisara a fondo también sus conclusiones. Por suerte, al haber cursado lingüística en el pasado tenía los conocimientos necesarios para entender y poder cuestionar sus argumentos.</p>
                <p>No siempre era sencillo. Walther no era nativo y estructuraba muchas veces sus oraciones a la manera alemana, y sus ideas eran igualmente alemanas en cuanto a complejidad. Necesitaba un corrector para poder adecuar el lenguaje y el estilo al mundo académico inglés. </p>
                <p>Aprendí mucho de lingüística y literatura gracias a este y otros ensayos suyos a lo largo del año.</p>
				</div>
				</div>
                <div class="col-lg-12">
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/essay3.jpg" alt="asesoría literaria">
                </div>
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/essay1.jpg" alt="asesoría literaria">
                </div>
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/essay2.jpg" alt="asesoría literaria">
                </div>
                </div>
                <div class="col-lg-8 col-lg-offset-2">
                <ul class="list-inline">
                  <li>Fecha: Marzo 2015</li>
                  <li>Cliente: Walther Glödstaf</li>
                  <li>Categoría: <i>Copy-editing</i> – corrección de estilo y contenido</li>
                </ul>
                </div>
                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar proyecto</button>
          </div>
        </div>
      </div>
    </div>
  </div>

   <!-- Portfolio Modal 11 -->
  <div class="portfolio-modal modal fade" id="portfolioModal11" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl">
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2>Dioses enjaulados</h2>
                <p class="item-intro text-muted">Asesoría literaria</p>
                <p><i>Dioses enjaulados</i> es una novela de ciencia ficción que recuerda a <i>La ciudad y las estrellas</i> de Arthur C. Clarke y en ciertas pinceladas a <i>Dune:</i> en una Tierra muy avanzada en el futuro, gran parte de la humanidad vive en enormes metrópolis autosuficientes que investigan el uso de las IA, mientras que otra parte de la población es perseguida y sobrevive en condiciones paupérrimas, y aún otro enemigo se esconde en el subsuelo y rapta cadáveres.</p>
                <p>Gregorio quería un informe de lectura de su primer borrador para encontrar agujeros en la trama y encajar piezas que habían quedado sueltas. Dioses enjaulados contenía ideas originales y conceptos fascinantes, pero parecía que había sido compuesta a lo largo de mucho tiempo y por eso había perdido el hilo de lo que quería contar.</p>
                <p>Abajo puedes ver algunos de mis comentarios para Gregorio:</p>
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/dioses1.jpg" alt="asesoría literaria">
                </div>
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/dioses3.jpg" alt="asesoría literaria">
                </div>
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/dioses2.jpg" alt="asesoría literaria">
                </div>
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/dioses4.jpg" alt="asesoría literaria">
                </div>
                <ul class="list-inline">
                  <li>Fecha: Junio 2017</li>
                  <li>Cliente: Gregorio Bruno</li>
                  <li>Categoría: Asesoría literaria</li>
                </ul>
                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar proyecto</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Portfolio Modal 12 TBM -->
  <div class="portfolio-modal modal fade" id="portfolioModal12" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl">
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="modal-body">
              <div class="col-sm-8 col-sm-offset-2">
                <div class="modal-body">
                  <h2>The Body Massamagrell</h2>
                  <p class="item-intro text-muted">Marketing y redes sociales</p>
                  <p>The Body Massamagrell no estaba aprovechando sus dos años de vida y todos los clientes fijos y muy entusiastas que había conseguido, así que lo primero que hicimos fue buscar sus testimonios para crear <b>autoridad y confianza</b>. </p>
                  <p>Su perfil de cliente es una mujer de mediana edad e ingresos económicos medios-altos que quiere estar en forma sin tener que invertir mucho tiempo. Para este cliente desarrollamos una estrategia de contenido de valor para sus intereses y necesidades (rutinas de ejercicio breves, alimentación sana, higiene postural, productividad) y lo educamos de forma entretenida sobre la electroestimulación con encuestas, concursos y vídeos, y para incrementar la visibilidad y alcance de la página hacemos promociones mensualmente que incitan a que el usuario comparta y comente. </p>
                  <p>Desde que empezamos la campaña hemos pasado de 127 seguidores a 231, incrementado las interacciones en un 324% y obtenido 126% más visitas a la semana, aunque <b>lo importante de todo esto es que María ya está trabajando con clientes que la han conocido «por las redes», no solo del boca a boca. </b></p>
                  <p>The Body necesitaba ampliar su círculo de clientes potenciales y lo ha conseguido. Nuestro trabajo actual es convertirnos en una marca de referencia en el sector de la salud y el deporte en su zona. </p>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/the_body_1.jpg" alt="marketing gestión redes sociales">
                </div>
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/the_body_2.jpg" alt="marketing gestión redes sociales">
                </div>
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/the_body_3.jpg" alt="marketing gestión redes sociales">
                </div>
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/the_body_4.jpg" alt="marketing gestión redes sociales">
                </div>
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/the_body_5.jpg" alt="marketing gestión redes sociales">
                </div>
                <p>Nuestro calendario editorial: </p>
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/the_body_6.jpg" alt="marketing gestión redes sociales">
                </div>
              </div>
              <ul class="list-inline">
                <li>Fecha: Septiembre 2017 – presente</li>
                <li>Cliente: María Jiménez</li>
                <li>Categoría: Marketing y redes sociales</li>
              </ul>
              <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar proyecto</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 13 WriterMuse -->
  <div class="portfolio-modal modal fade" id="portfolioModal13" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl">
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="modal-body">
              <div class="col-sm-8 col-sm-offset-2">
                <!-- Project Details Go Here -->
                <h2>WriterMuse</h2>
                <p class="item-intro text-muted">Asesoría y corrección para escritores</p>
                <p>Writermuse es mi <b>negocio online</b> para llevar la creatividad y el placer de la escritura a todo el mundo.</p>
                <p>
                  Mi único propósito con WriterMuse es que <b>los escritores escriban y que disfruten con ello</b>. Más y mejor vienen con la práctica, pero lo principal es sentarse a trabajar.
                  Hay mucha gente que vive la escritura como una vocación pero que no escribe o que no confía en lo que ha escrito; se resisten a escribir o a dejar partir una obra que consideran imperfecta e inadecuada. Pero la escritura se puede vivir de otra manera, de la manera creativa.
                </p>
                <h3>Con WriterMuse quiero darte la seguridad de que puedes escribir y publicar tu novela. <br>Quiero que no te quedes con tu historia dentro sin contar. </h3>
                <p>
                  Escribo una vez a la semana y preparo recursos para escritores para aprender a escribir más y para poder acceder a la inspiración siempre que lo necesiten. La creatividad se puede –¡y se debe!– ejercitar.
                  No descuido tampoco el lado crítico. En WriterMuse te ayudo a planear tu novela desde cero y a detectar qué funciona y qué no, en tu propio libro y en otros. Ser un maestro de la narrativa también está a tu alcance si entiendes qué hace que tus libros preferidos funcionen.
                </p>
                <p>Si te tomas tu vocación en serio y quieres llegar aún más lejos, puedes acceder a mis <b>contenidos premium</b>: cursos de creatividad aplicada a la narrativa, aplicaciones web y móviles para generar y desarrollar ideas, talleres de <i>storytelling</i>... Todo para que la escritura sea un hobby de verdad y <b>para que te sientas seguro diciendo «soy escritor».</b></p>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="thumbnail">
                <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/writermuse_1_b.jpg" alt="Asesoría y corrección para escritores writermuse">
              </div>
              <div class="thumbnail">
                <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/writermuse_2.jpg" alt="Asesoría y corrección para escritores writermuse">
              </div>
              <div class="thumbnail">
                <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/writermuse_3.jpg" alt="Asesoría y corrección para escritores writermuse">
              </div>
              <div class="thumbnail">
                <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/writermuse_4.jpg" alt="Asesoría y corrección para escritores writermuse">
              </div>
              <div class="col-sm-6">
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/writermuse_5.jpg" alt="Asesoría y corrección para escritores writermuse">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/loading.gif" data-src="img/portfolio/writermuse_6.jpg" alt="Asesoría y corrección para escritores writermuse">
                </div>
              </div>
              <div class="col-sm-8 col-sm-offset-2">
                <ul class="list-inline">
                  <li>Fecha: Septiembre 2016</li>
                  <li>Cliente: <i>Proyecto propio</i></li>
                  <li>Categoría: Asesoría y corrección para escritores</li>
                </ul>
                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar proyecto</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 14 TAGDisruptor -->
  <div class="portfolio-modal modal fade" id="portfolioModal14" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl">
            </div>
          </div>
        </div>
        <div class="container">
          <div class="modal-body">
            <!-- Project Details Go Here -->
            <h2>TAGDisruptor</h2>
            <p class="item-intro text-muted">Copywriting / Marketing</p>
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <p>TAGDisruptor es una empresa valenciana de estética con un sistema innovador para la reducción de grasa localizada. Pero innovador de verdad, ¿eh? Te lo aplicas tú mismo en 5 min y después haces un poco de ejercicio para que tu cuerpo elimine la grasa de la zona que tú has elegido: es genial para esas zonas donde se acumula la grasa y no hay ejercicio ni dieta que valga para desalojarla.</p>
                <p>Estaba claro que José Luís y Alfredo tenían un producto rompedor, pero no sabían cómo moverlo online para darlo a conocer. No tenían un plan de marketing ni ningún tipo de publicidad, contenido o testimonio que creara autoridad y confianza en el usuario.</p>
                <p>Para remediar todo esto, empezamos una <b>campaña de marketing con <i>influencers</i> y a crear contenido para sus redes sociales</b>, y ahora han conseguido expandirse hasta contar con más de 40 franquiciados y 6 distribuciones en el extranjero. El mérito de la idea es todo suyo, pero sin un marketing adecuado no habrían sido descubiertos aún.</p>

                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/portfolio/tagd_3_700.jpg" alt="tag ejemplo">
                </div>
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/portfolio/tagd_2_700.jpg" alt="tag ejemplo">
                </div>
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/portfolio/tagd_1_700.jpg" alt="tag ejemplo">
                </div>
              </div>
            </div>
            <ul class="list-inline">
              <li>Fecha: Marzo 2018</li>
              <li>Cliente: José Luís Delgado y Alfredo Martínez</li>
              <li>Categoría: Copywriting / Marketing</li>
            </ul>
            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar proyecto</button>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- Portfolio Modal 15 Barquitos -->
  <div class="portfolio-modal modal fade" id="portfolioModal15" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl">
            </div>
          </div>
        </div>
        <div class="container">
          <div class="modal-body">
            <!-- Project Details Go Here -->
                <h2>Barquitos</h2>
                <p class="item-intro text-muted">Corrección</p>
                <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                <p>Antes de presentar sus relatos a concursos o antologías, Javier siempre me pide que haga una corrección ortotipográfica. En el caso de <i>Barquitos</i>, le propuse además hacer una corrección de estilo para que pudiera comparar ambas y aplicar lo que aprendiera de esta a futuros relatos. La corrección ortotipográfica es fundamental para publicar con calidad profesional, pero la de estilo te puede ayudar muchísimo a crecer como escritor. </p>
                <p>Javier escribe con una excelente corrección técnica, pero incluso en su caso la corrección de ambos tipos ha sacado a relucir muchos errores que al autor se le pasaron por alto; esto pasa siempre, con todos los escritores, ya que el autor del texto está demasiado familiarizado con el contenido como para advertir los fallos. </p>
                  <p>En los ejemplos verás en rojo las correcciones ortotipográficas (estrictamente errores de ortografía o tipografía) y en naranja las correcciones de estilo (problemas sintácticos, de coherencia de tiempos verbales, etc.). En ningún caso, y pese al nombre que le han dado a este tipo de corrección, modifico el estilo de Javier: ese no es el trabajo del corrector. </p>
              </div>
              </div>
              <div class="col-lg-12">
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/portfolio/barquitos_1.jpg" alt="corrección ortotipográfica y de estilo">
                </div>
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/portfolio/barquitos_2.jpg" alt="corrección ortotipográfica y de estilo">
                </div>
                <div class="thumbnail">
                  <img class="img-responsive img-centered" src="img/portfolio/barquitos_3.jpg" alt="corrección ortotipográfica y de estilo">
                </div>
                </div>
                <div class="col-lg-8 col-lg-offset-2">
                <ul class="list-inline">
                  <li>Fecha: Junio 2018</li>
                  <li>Cliente: Javier Cebrián</li>
                  <li>Categoría: Corrección</li>
                </ul>
                </div>
                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar proyecto</button>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vide/0.5.1/jquery.vide.min.js" integrity="sha256-vjlQ2rQnkbtQ1goJyAhpuoyG99q3Tv8juRo2XQxxCDE=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha256-z6FznuNG1jo9PP3/jBjL6P3tvLMtSwiVAowZPOgo56U=" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/isotope-layout@3.0.6/dist/isotope.pkgd.min.js"></script>

  <script>

    // Theme JavaScript
    !function(t){"use strict";t("a.page-scroll").bind("click",function(a){var o=t(this);t("html, body").stop().animate({scrollTop:t(o.attr("href")).offset().top-50},1250,"easeInOutExpo"),a.preventDefault()}),t("body").scrollspy({target:".navbar-fixed-top",offset:51}),t(".navbar-collapse ul li a").click(function(){t(".navbar-toggle:visible").click()}),t("#mainNav").affix({offset:{top:100}})}(jQuery);

    // Encendemos wow, such easy!
    new WOW().init();


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


    // Configuración del slider
    var total_slides = 9;

    function nextSlide() {
      // Cogemos la slide actual visible
      var slide = $("div[id^='slider_']:visible")

      // Le sacamos el id
      slide_id = slide.attr('id');
      var id = slide_id.substr(7, 1);

      // Le sumamos 1
      next_id = parseInt(id) + 1;

      // Si nos hemos pasado del total de slides, volvemos a la primera
      if (next_id > total_slides) {
        next_id = 1;
      }

      // Hacemos la transición
      slide.fadeOut('fast', function() {
        $('#slider_'+next_id).fadeIn('slow');
      });
    }

    function prevSlide() {
      // Cogemos la slide actual visible
      var slide = $("div[id^='slider_']:visible")

      // Le sacamos el id
      slide_id = slide.attr('id');
      var id = slide_id.substr(7, 1);

      // Le sumamos 1
      next_id = parseInt(id) - 1;

      // Si nos hemos pasado del total de slides, volvemos a la primera
      if (next_id < 1) {
        next_id = total_slides;
      }

      // Hacemos la transición
      slide.fadeOut('fast', function() {
        $('#slider_'+next_id).fadeIn('slow');
      });
    }

    function stopSlider() {
      clearInterval(slider);
    }

    // Encendemos el slider
    var slider = setInterval( function() { nextSlide() }, 6000);


    // Typeform load (carga del formulario de contacto)
    (function(){var qs,js,q,s,d=document,gi=d.getElementById,ce=d.createElement,gt=d.getElementsByTagName,id="typef_orm",b="https://s3-eu-west-1.amazonaws.com/share.typeform.com/";if(!gi.call(d,id)){js=ce.call(d,"script");js.id=id;js.src=b+"widget.js";q=gt.call(d,"script")[0];q.parentNode.insertBefore(js,q)}})()

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
