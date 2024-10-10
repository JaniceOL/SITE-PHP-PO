<?php
namespace Core;

class ConfigView
{
    private string $name;
    private array|string|null $data; // Permite que $data seja um array, string ou null

    public function __construct(string $name, array|string|null $data)
    {
        $this->name = $name; // Atribui o nome da view à propriedade $name
        $this->data = $data; // Atribui os dados

        var_dump($this->data);
    }

    public function loadView(): void
    {
        // Verifica se o arquivo de view existe antes de tentar carregá-lo
        if (file_exists($this->name . ".php")) {
            // Importa o arquivo da view e disponibiliza os dados para ele
            include $this->name . ".php";
            include "app/sts/Views/include/header.php";
            include "app/sts/Views/include/footer.php";
        } else {
            die("Error, Por favor tente novamente. Se o erro persistir, abra um chamado: " . EMAILADM);
        }
    }
}

