<?php

require "model/model.php";
require "view/view.php";

class Controller{
  public function index(){
    $model = new Model();
    $view = new View();

    $view->exibir($model->listarDados());
  }
}
