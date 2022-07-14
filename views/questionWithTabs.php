<?php $this->layout("_template", ['head' => $head]); ?>




<div class="">
  <div class="row justify-content-md-center">
    <div class="col col-lg-2">
      <img class="d-block mx-auto mb-4 text-start" src="<?= asset('img/palace-kids.jpg') ?>" alt="" style="width: 50%;">
    </div>
    <div class="col col-lg-2">
      <img class="d-block mx-auto mb-4 text-start" src="<?= asset('img/palace.png') ?>" alt="" style="width: 50%;">
    </div>
  </div>
  <?php
  $tabs = ceil($questionsTotal / 10);
  var_dump($tabs);
  ?>

  <ul class="nav nav-tabs">
    <?php for ($i = 0; $i < $tabs; $i++) : ?>
      <li class="nav-item">
        <a href="#page<?= $i + 1 ?>" class="nav-link <?= $i == 0 ? 'active': ''?>" data-bs-toggle="tab">Page <?= $i + 1 ?></a>
      </li>
    <?php endfor; ?>
    <!-- <li class="nav-item">
      <a href="#profile" class="nav-link" data-bs-toggle="tab">Profile</a>
    </li>
    <li class="nav-item">
      <a href="#messages" class="nav-link" data-bs-toggle="tab">Messages</a>
    </li> -->
  </ul>
  <div class="tab-content">
  <?php for ($a = 0; $a < $tabs; $a++) : ?>
    <div class="tab-pane fade <?= $a == 0 ? 'show active': ''?>" id="page<?= $a + 1 ?>">
      <p>Conteudo pagina <?= $a + 1 ?></p>
    </div>

    <?php endfor; ?>
  </div>

</div>