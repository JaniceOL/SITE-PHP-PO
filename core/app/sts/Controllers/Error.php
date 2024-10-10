<?php

namespace core\app\sts\Controllers;

Class Error

{
   private string|null $data;

    public function index()
    {
      // Inicializando o array vazio corretamente
      $this->data = [];

      // Passando o caminho correto para a view e os dados
      $loadView = new \Core\ConfigView("core/app/sts/Views/error/error", $this->data);
      $loadView->loadView(); // Chamar o método que carrega a view
    }

   
}