<?php

  $conversacion = [
    [
      'class' => 'fadeInLeft',
      'align' => 'text-left',
      'texto' => '<i class="fa fa-fw fa-quote-left"></i>
      ¿<span class="text-primary">Personal</span>?<br>
      ¿Pero eso no es muy "1996"?',
    ],[
      'class' => 'timeline-inverted fadeInRight',
      'delay' => '1s',
      'align' => 'text-right',
      'texto' => 'Sí, qué tiempos aquellos.<br>
      Mira, aquí están mis últimos posts:',
      'posts' => [
        [
          'href' => 'https://googleluegoexisto.com/',
          'src' => 'dl_450_t.jpg',
          'alt' => 'informe de lectura editorial',
        ],[
          'href' => '#',
          'src' => 'cenainformal.jpg',
          'alt' => 'asesoría literaria corrección',
        ],[
          'href' => '#',
          'src' => 'the_body_massamagrell.jpg',
          'alt' => 'copywriting marketing',
        ],[
          'href' => '#',
          'src' => 'diosesenjaulados.jpg',
          'alt' => 'asesoría literaria',
        ]
      ]
    ],[
      'class' => 'mt-150 fadeInLeft',
      'align' => 'text-left',
      'texto' => '<i class="fa fa-fw fa-quote-left"></i>
      ¿Y a qué te dedicas?',
    ],[
      'class' => 'timeline-inverted fadeInRight',
      'delay' => '1.1s',
      'align' => 'text-right',
      'texto' => 'Pues a ver, hago<br>
      <span class="type-it"></span><br><br>
      Digamos que soy <span class="text-primary">CREATIVA</span><br>
      y llevo a cabo <span class="text-primary">PROYECTOS</span>',
    ],[
      'class' => 'mt-150 fadeInLeft',
      'align' => 'text-left',
      'texto' => '<i class="fa fa-fw fa-quote-left"></i>
      O sea,<br>
      un manitas de la era digital, ¿no?',
    ],[
      'class' => 'timeline-inverted fadeInRight',
      'delay' => '1.3s',
      'align' => 'text-right',
      'texto' => 'Sí, exacto.<br>
      ¡Ojalá se me hubiera ocurrido a mí!',
    ],
  ];

?>

<!-- About Section -->
<section id="inicio" class="bg-light-gray">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <ul class="timeline">
          <?php foreach ($conversacion as $c): ?>
            <li class="wow <?= $c['class'] ?>" data-wow-offset="10" data-wow-delay="<?= isset($c['delay']) ? $c['delay'] : 0 ?>">
              <div class="timeline-panel">
                <div class="letra-convers <?= $c['align'] ?>">
                  <?= $c['texto'] ?>
                </div>
              </div>
            </li>
            <?php if (isset($c['posts'])): ?>
              <div class="row">
                <?php foreach ($c['posts'] as $post): ?>
                  <div class="col-xs-6 col-sm-3 mt-20">
                    <a href="<?= url($post['href']) ?>">
                      <img src="img/portfolio/<?= $post['src'] ?>" class="img-responsive hvr-bob" alt="<?= $post['alt'] ?>">
                    </a>
                  </div>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>
          <?php endforeach ?>
        </ul>
      </div>
    </div>
  </div>
</section>
