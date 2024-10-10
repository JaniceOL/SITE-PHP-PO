<?php

namespace core\app\sts\Controllers;

if(!defined('J1K2G3P4L7'))
{
   header("Location: /");
   die("Se nao encontra avisa ai");
}

class Contato
{
    // Permite que $data seja null ou uma string
    private string|null $data;

    public function index()
    {
        // Inicializando $data com uma string
        $this->data = "Casa"; // $data recebe uma string

        // Passando o caminho correto para a view e os dados
        $loadView = new \Core\ConfigView("core/app/sts/Views/contato/contato", $this->data);
        $loadView->loadView(); // Chamar o método que carrega a view
    }
}

