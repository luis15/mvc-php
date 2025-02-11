<?php
require 'controller/homeController.php';

$pagina = explode('/', $_SERVER['REQUEST_URI']);
$ctrl   = new homeController();

match ($pagina[1]) {
    'index' => $ctrl->index(),
    'login' => $ctrl->login(),
    'painel' => $ctrl->painel(),
    default => $ctrl->index()
};
