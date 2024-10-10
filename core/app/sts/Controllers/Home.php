<?php
namespace core\app\sts\controllers;

class Home
{
    private array|string|null $data; // Permite que $data seja array, string ou null

    public function index()
    {
        // Verificando se a classe TesteModel existe
        if (!class_exists(\Sts\Models\TesteModel::class)) {
            die('Classe TesteModel não encontrada!');
        }

        // Instanciando a classe TesteModel corretamente
        $home = new \Sts\Models\TesteModel(); 
        $this->data = $home->index(); // Armazena o retorno no atributo $data


        // Passando o caminho correto para a view e os dados
        $loadView = new \Core\ConfigView("core/app/sts/Views/home/home", $this->data);
        $loadView->loadView(); // Chamar o método que carrega a view
    }
}
