<?php

  $desplegables = [
    [
      'id' => 'collapseOne',
      'class' => '',
      'titulo' => '¿Qué es MTORNERO?',
      'texto' => 'Es mi blog personal, donde entra todo lo que me apetece escribir en cada momento: literatura, marketing, creatividad, crecimiento personal... ¡Abajo con la tiranía del blog nicho! ¡El SEO ha muerto; larga vida al SEO!',
    ],[
      'id' => 'collapseTwo',
      'class' => 'in',
      'titulo' => '¿Qué ha sido de WriterMuse?',
      'texto' => '<a href="https://www.writermuse.es">WriterMuse</a> y todos los recursos y artículos de escritura creativa que creé están todavía disponibles, pero no estoy actualizando la web. Si te digo la verdad, me he dado cuenta de que invertía demasiado tiempo escribiendo sobre escribir, tiempo que ahora necesito para escribir mis propias obras. Quién sabe, tal vez vuelva, pero si lo hace será algo muy diferente de lo que fue en sus inicios.',
    ],[
      'id' => 'collapseThree',
      'class' => '',
      'titulo' => '¿Sigues haciendo informes de lectura y correcciones?',
      'texto' => 'Ahora estoy dedicándome por completo a mis propios proyectos de escritura. Disfruto un montón leyendo y analizando los manuscritos inéditos de escritores, por lo que estoy segura de que en un futuro volveré a la carga, pero hasta entonces si buscas que un profesional te ayude a pulir tu obra, puedo recomendarte a la gente en la que confío: escríbeme.',
    ],[
      'id' => 'collapseFour',
      'class' => '',
      'titulo' => 'Cuéntame un poco más sobre ti',
      'texto' => 'Veamos... Vivo en Valencia, España. Me encanta leer y puedes encontrarme alternativamente devorando libros y analizándolos con mucho detenimiento. Escribo fantasía y ciencia ficción, pero nada que merezca publicarse ni siquiera bajo pseudónimo, aún. Bailo lindy hop desde hace años y es lo que me da la vida después de una larga semana de trabajo: echarme un baile y beberme una Voll Damm fresquita. Aún no sé cuál es mi misión o propósito vital, pero ya lo descubriré. <br><br> Espero que te encuentres a gusto en mi blog y... ¡gracias por leerme!',
    ],
  ];

?>

<!-- Desplegable Section -->
<section id="faq">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading">
          Otras preguntas frecuentes
        </h2>
        <h3 class="section-subheading text-muted"></h3>
      </div>
      <div class="col-lg-12">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

          <?php foreach ($desplegables as $d): ?>

            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="heading_<?=$d['id']?>">
                <h4 class="panel-title">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#<?=$d['id']?>" aria-expanded="true" aria-controls="<?=$d['id']?>">
                    <?=$d['titulo']?>
                  </a>
                </h4>
              </div>
              <div id="<?=$d['id']?>" class="panel-collapse collapse <?=$d['class']?>" role="tabpanel" aria-labelledby="heading_<?=$d['id']?>">
                <div class="panel-body">
                  <?=$d['texto']?>
                </div>
              </div>
            </div>

          <?php endforeach; ?>

        </div>
      </div>
    </div>
  </div>
</section>
