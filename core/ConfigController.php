<?php

namespace Core;

class ConfigController
{
    private $Url;
    private $UrlConjunto;
    private $UrlController;
    private $UrlParametro;
    private static $Format;

    public function __construct()
    {
        if (!empty(filter_input(INPUT_GET, 'url', FILTER_DEFAULT))) {
            $this->Url = filter_input(INPUT_GET, 'url', FILTER_DEFAULT);

            $this->limparUrl();

            $this->UrlConjunto = explode("/", $this->Url);

            $this->UrlController = isset($this->UrlConjunto[0]) ? $this->slugController($this->UrlConjunto[0]) : CONTROLLER;

            $this->UrlParametro = isset($this->UrlConjunto[1]) ? $this->UrlConjunto[1] : null;

            echo "URL: {$this->Url}<br>";
            echo "Controller: {$this->UrlController}<br>";
        } else {
            $this->UrlController = 'Home';
            $this->UrlParametro = null;
        }
    }

    private function slugController($slugController)
    {
        return str_replace(" ", "", ucwords(str_replace("-", " ", strtolower($slugController))));
    }

    private function limparUrl()
    {
        $this->Url = strip_tags($this->Url);
        $this->Url = trim($this->Url);
        $this->Url = rtrim($this->Url, "/");

        self::$Format = array();
        self::$Format['a'] = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr"!@#$%&*()_-+={[}]?;:.,\\\'<>°ºª ';
        self::$Format['b'] = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr--------------------------------';

        // Substituir utf8_decode com mb_convert_encoding
        $this->Url = strtr(mb_convert_encoding($this->Url, 'ISO-8859-1', 'UTF-8'), mb_convert_encoding(self::$Format['a'], 'ISO-8859-1', 'UTF-8'), self::$Format['b']);
    }

    public function carregar()
    {
        $classe = "Core\\App\\Sts\\Controllers\\" . $this->UrlController;

        if (class_exists($classe)) {
            $carregarClasse = new $classe;
            $carregarClasse->index();
        } else {
            die("Erro: Classe '{$classe}' não encontrada.");
        }
    }
}
