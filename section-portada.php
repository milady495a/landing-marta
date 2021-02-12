<?php

  $portfolios = [
    [
      'src' => 'img_portada_1.jpg',
      'alt' => 'foto',
    ],[
      'src' => 'img_portada_2.jpg',
      'alt' => 'copywriting',
    ],[
      'src' => 'img_portada_3.jpg',
      'alt' => 'marketing',
    ],[
      'src' => 'img_portada_4.jpg',
      'alt' => 'asesoría literaria',
    ],[
      'src' => 'img_portada_5.jpg',
      'alt' => 'corrección ortotipográfica',
    ],[
      'src' => 'img_portada_6.jpg',
      'alt' => 'asesoría web',
    ],[
      'src' => 'img_portada_7.jpg',
      'alt' => 'informe de lectura',
    ],[
      'src' => 'img_portada_8.jpg',
      'alt' => 'editorial',
    ],[
      'src' => 'img_portada_9.jpg',
      'alt' => 'corrección',
    ],[
      'src' => 'img_portada_10.jpg',
      'alt' => 'copyediting',
    ],[
      'src' => 'img_portada_11.jpg',
      'alt' => 'corrección de estilo editing',
    ],[
      'src' => 'img_portada_12.jpg',
      'alt' => 'asesoría literaria',
    ],[
      'src' => 'img_portada_13.jpg',
      'alt' => 'copywriting marketing',
    ],[
      'src' => 'img_portada_14.jpg',
      'alt' => 'copywriting marketing',
    ],[
      'src' => 'img_portada_15.jpg',
      'alt' => 'corrección para escritores',
    ],[
      'src' => 'img_portada_16.jpg',
      'alt' => 'asesoría literaria',
    ],[
      'src' => 'img_portada_17.jpg',
      'alt' => 'corrección',
    ],[
      'src' => 'img_portada_18.jpg',
      'alt' => 'writermuse',
    ]
  ];

?>

<!-- Portfolio Grid Section -->
<section id="portada" class="bg-light-gray">
  <div class="container-fluid">
    <div class="row">

      <div class="titulaco">
        ¡Hola! Soy <span class="text-primary">Marta</span><br>
        y este es mi<br>
        blog <span class="text-primary">personal</span><br>
        <a href="blog" class="btn btn-xl">Ir al Blog</a>
      </div>

      <!-- Aqui generamos los cuadrados de fondo -->
      <?php foreach ($portfolios as $p): ?>
        <div class="col-xs-3 col-sm-2 col-lg-2 cuadroHead">
          <img src="img/portfolio/<?= $p['src'] ?>" class="img-responsive" alt="<?= $p['alt'] ?>">
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
