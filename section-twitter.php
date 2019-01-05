<?php

  $conversacion = [
    [
      'class' => 'fadeInLeft',
      'align' => 'text-left',
      'texto' => '<i class="fa fa-fw fa-quote-left"></i>
      ¿Tienes redes?',
    ],[
      'class' => 'timeline-inverted fadeInRight',
      'align' => 'text-right',
      'texto' => 'Bueno... Tener, tengo,
      como todo el mundo,
      otra cosa es que publique.<br>
      Mi twitter:',
    ]
  ];

?>

<!-- Twitter -->
<section id="redes" class="bg-light-gray">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <ul class="timeline">
          <?php foreach ($conversacion as $c): ?>
            <li class="wow <?= $c['class'] ?>">
              <div class="timeline-panel">
                <div class="letra-convers <?= $c['align'] ?>">
                  <?= $c['texto'] ?>
                </div>
              </div>
            </li>
          <?php endforeach ?>
        </ul>
        <div class="text-center">
          <!-- https://publish.twitter.com/# -->
          <a class="twitter-timeline" data-width="625" data-height="700" data-dnt="true" href="https://twitter.com/MartaWriterMuse?ref_src=twsrc%5Etfw">Tweets by MartaWriterMuse</a>
          <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
      </div>
    </div>
  </div>
</section>
