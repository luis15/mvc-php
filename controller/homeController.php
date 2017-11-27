<?php

require "model/usuarioModel.php";

class homeController{
  public function index(){
    include "view/index.php";
  }
  public function login(){
    include "view/login.php";
  }
  public function painel(){
    $model = new usuarioModel();
    $dados = $model->usuarioLogado();
    include "view/painel.php";
  }
}
