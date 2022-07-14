<?php $this->layout("_template", ['head' => $head]); ?>




<div class="px-4 py-5 my-5 text-center">
  <div class="row justify-content-md-center">
    <div class="col col-lg-2">
      <img class="d-block mx-auto mb-4 text-start" src="<?= asset('img/palace-kids.jpg') ?>" alt="" >
    </div>
    <div class="col col-lg-2">
      <img class="d-block mx-auto mb-4 text-start" src="<?= asset('img/palace.png') ?>" alt="" >
    </div>
  </div>



  <h1 class="display-5 fw-bold">O DOM ESPIRITUAL </h1>
  <div class="col-lg-6 mx-auto">
    <p class="lead mb-4">É a capacitação que Deus concede a cada cristão PARA DESENVOLVER UMA TAREFA através da qual Deus irá agir (I Co 12.6). </p>
    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
      <a href="<?=$router->route('site.information')?>" class="btn btn-primary btn-lg px-4 gap-3">Responder Questionário</a>
      <a href="<?=$router->route('site.result')?>" class="btn btn-outline-secondary btn-lg px-4">Resultado</a>
    </div>
  </div>
</div>