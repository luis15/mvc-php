<?php

require "model/model.php";

class Controller{
  public function index(){
    $model = new Model();
    $dados = $model->listarDados();
    include "view/view.php";

  }
}
