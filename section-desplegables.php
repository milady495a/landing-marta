<?php

  $desplegables = [
    [
      'id' => 'collapseOne',
      'class' => 'in',
      'titulo' => '¿Qué ha sido de WriterMuse?',
      'texto' => 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.',
    ],[
      'id' => 'collapseTwo',
      'class' => '',
      'titulo' => '¿Sigues haciendo informes de lectura y correcciones?',
      'texto' => 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.',
    ],[
      'id' => 'collapseThree',
      'class' => '',
      'titulo' => '¿Qué es MTORNERO?',
      'texto' => 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.',
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
