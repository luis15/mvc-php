<?php
require "controller/homeController.php";

$pagina = explode( '/', $_SERVER['REQUEST_URI']);
$ctrl = new homeController();

switch($pagina[1]){
  case "index":
  $ctrl->index();
  break;
  case "login":
  $ctrl->login();
  break;
  case "painel":
  $ctrl->painel();
  break;
  default:
  $ctrl->index();
  break;
}
