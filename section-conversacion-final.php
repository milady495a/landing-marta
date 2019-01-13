<?php

  $conversacion = [
    [
      'class' => 'fadeInLeft',
      'align' => 'text-left',
      'texto' => '<i class="fa fa-fw fa-quote-left"></i>
      Oye, un placer conocerte.',
    ],[
      'class' => 'timeline-inverted fadeInRight',
      'delay' => '0.5s',
      'align' => 'text-right',
      'texto' => '¿Qué dices? ¡Pero si esto<br>
      es una conversación simulada!<br>
      Si quieres conocerme puedes:<br>
      <div class="mt-20">
      - Seguirme en <a href="'.$twitter.'" target="_blank">Twitter</a><br>
      - Escribirme a <a href="mailto:marta@mtornero.com?subject=Mensaje desde mtornero.com&body=Hola Marta!" target="_blank">marta@mtornero.com</a>
      </div>',
    ]
  ];

?>

<!-- About Section -->
<section id="contacto" class="bg-light-gray">
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
          <?php endforeach ?>
        </ul>
      </div>
    </div>
  </div>
</section>
