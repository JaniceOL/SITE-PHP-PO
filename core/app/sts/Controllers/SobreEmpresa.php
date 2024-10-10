<?php

namespace core\app\sts\Controllers;

Class SobreEmpresa

{
    private string|null $data;

    public function index()
    {
      // Inicializando o array vazio corretamente
      $this->data = [];

      // Passando o caminho correto para a view e os dados
      $loadView = new \Core\ConfigView("core/app/sts/Views/Sobreempresa/Sobreempresa", $this->data);
      $loadView->loadView(); // Chamar o método que carrega a view
    }

   

}