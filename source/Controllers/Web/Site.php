<?php

namespace Source\Controllers\Web;

use Source\Core\Controller;
use Source\Models\Question;

class Site extends Controller
{

    /**
     * @param mixed $router
     * @return [type]
     */
    public function __construct($router)
    {
        parent::__construct($router);
    }

    public function home(): void
    {
        $head = $this->seo->optimize(
            "Identificação | " . SITE["name"],
            url("desc"),
            $this->router->route("site.home"),
            asset("img/shared.jpg"),
        )->render();

        echo $this->view->render("home", [
            "head" => $head
        ]);
    }


    public function information(): void
    {
        $head = $this->seo->optimize(
            "Informações | " . SITE["name"],
            url("desc"),
            $this->router->route("site.information"),
            asset("img/shared.jpg"),
        )->render();

        echo $this->view->render("information", [
            "head" => $head
        ]);
    }

    public function question(): void
    {
        $questions = (new Question())->find()->fetch(true);
        $head = $this->seo->optimize(
            "Questionário | " . SITE["name"],
            url("desc"),
            $this->router->route("site.information"),
            asset("img/shared.jpg"),
        )->render();

        echo $this->view->render("question", [
            "head" => $head,
            "questions" => $questions
        ]);
    }


    /**
     * @param mixed $data
     *
     * @return void
     */
    public function error($data): void
    {
        $error = filter_var($data["errcode"], FILTER_VALIDATE_INT);
        var_dump($error);
        // $head = $this->seo->optimize(
        //     "Oooops {$error}" . site("name"),
        //     site("desc"),
        //     $this->router->route("web.error", ["errcode" => $error]),
        //     routeImage($error)
        // )->render();

        // echo $this->view->render("theme/error", [
        //     "head" => $head,
        //     "error" => $error
        // ]);
    }
}
