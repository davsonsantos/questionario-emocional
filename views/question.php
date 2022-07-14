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
  <form>
    <?php foreach ($questions as $question) :  ?>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label"><b><?= $question->description ?></b></label>
        <select name="option" class="form-select">
          <option>Constante; definitivamente certo.</option>
          <option>Na maioria das vezes; normalmente certo.</option>
          <option>Algumas vezes; de vez em quando.</option>
          <option>Nunca, jamais.</option>
        </select>
      </div>
    <?php endforeach; ?>

    <div class="d-grid gap-2 mb-5">
      <button class="btn btn-primary" type="button">Enviar Respostas</button>
    </div>
  </form>

</div>