<?php

  $portfolios = [
    [
      'src' => '300a_450.jpg',
      'alt' => 'asesoría literaria y corrección',
    ],[
      'src' => 'centromana.jpg',
      'alt' => 'copywriting marketing',
    ],[
      'src' => 'aez_450_t.jpg',
      'alt' => 'asesoría literaria corrección',
    ],[
      'src' => 'oxfdnb_450_t.jpg',
      'alt' => 'corrección ortotipográfica',
    ],[
      'src' => 'racism_450_t.jpg',
      'alt' => 'corrección ortotipográfica',
    ],[
      'src' => 'ivtn_450_t.jpg',
      'alt' => 'asesoría web corrección',
    ],[
      'src' => 'byn_450.jpg',
      'alt' => 'informe de lectura',
    ],[
      'src' => 'dl_450_t.jpg',
      'alt' => 'informe de lectura editorial',
    ],[
      'src' => 'grammaressay.jpg',
      'alt' => 'copyediting corrección de estilo editing',
    ],[
      'src' => 'cenainformal.jpg',
      'alt' => 'asesoría literaria corrección',
    ],[
      'src' => 'the_body_massamagrell.jpg',
      'alt' => 'copywriting marketing',
    ],[
      'src' => 'diosesenjaulados.jpg',
      'alt' => 'asesoría literaria',
    ],[
      'src' => 'tagdisruptor.jpg',
      'alt' => 'copywriting marketing',
    ],[
      'src' => 'barquitos.jpg',
      'alt' => 'copywriting marketing',
    ],[
      'src' => 'writermuse.jpg',
      'alt' => 'asesoría literaria corrección para escritores writermuse',
    ],[
      'src' => 'writermuse.jpg',
      'alt' => 'asesoría literaria corrección para escritores writermuse',
    ],[
      'src' => 'writermuse.jpg',
      'alt' => 'asesoría literaria corrección para escritores writermuse',
    ],[
      'src' => 'writermuse.jpg',
      'alt' => 'asesoría literaria corrección para escritores writermuse',
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
        blog personal
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
