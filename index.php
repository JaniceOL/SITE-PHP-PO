<?php

require_once "./vendor/autoload.php";

//criar uma constante de seguranca do projeto aqui usando "define"

define("J1K2G3P4L7",true);

// Use a classe ConfigController
use \Core\ConfigController;

// Instancie a classe ConfigController
$url = new ConfigController();
$url->carregar();