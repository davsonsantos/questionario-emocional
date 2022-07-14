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

    <div class="col-lg-6 mx-auto">
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Informações</h4>
            <p>Responda o <b>LEVANTAMENTO DOS DONS ESPIRITUAIS</b>, utilizando a seguinte escala:</p>
            <hr>
            <p class="mb-0">3 = Constante; definitivamente certo.</p>
            <p class="mb-0">2 = Na maioria das vezes; normalmente certo.</p>
            <p class="mb-0">1 = Algumas vezes; de vez em quando.</p>
            <p class="mb-0">0 = Nunca, jamais.</p>
        </div>

        <form>
            <div class="form-group mb-3">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" placeholder="Seu nome">
            </div>
            <div class="form-group mb-3">
                <label for="emial">E-mail</label>
                <input type="email" class="form-control" id="emial" placeholder="Seu email">
            </div>
            <div class="form-group mb-3">
                <label for="phone">Telefone</label>
                <input type="text" class="form-control" id="phone" placeholder="Telefone">
            </div>
            <!-- <button type="submit" class="btn btn-primary">Confirmar</button> -->
            <a href="<?=$router->route('site.question')?>" class="btn btn-primary">Confirmar</a>
            <div class=" ajax_response"><?= flash(); ?></div>
        </form>


    </div>
</div>