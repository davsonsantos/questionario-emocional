<?php
ob_start();
session_start();

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;


$router = new Router(url());
/******************************************************************/
/**********************ROUTER CONTROLLERS WEB**********************/
/******************************************************************/
$router->namespace("Source\Controllers\Web");
$router->group(null);
/** web **/
$router->get("/", "Site:home", "site.home");
$router->get("/informacoes", "Site:information", "site.information");
$router->get("/questionario", "Site:question", "site.question");
$router->get("/resultado", "Site:result", "site.result");
/** errors **/
$router->group("ops");
$router->get("/{errcode}", "Site:error", "site.error");



/** ROUTES PROVESS **/
$router->dispatch();

/** ERRORS PROCESS **/
if ($router->error()) {
    $router->redirect("site.error", ["errcode" => $router->error()]);
}

ob_end_flush();