<?php

session_start();
ob_start();

define("NAME", 'Projeto MoverWEB');
define("URL", "http://projeto_site_phpoo.test/");
define("URLADM", "http://projeto_site_phpoo.test/admin/");
define("CONTROLLER", "Home");
define("METODO", "Home");
define("EMAILADM", "oliveira.janice.ufpe@gmail.com");

//configurações para conectar no BD.

define("HOST", 'localhost');
define("USER", "root");
define("PASS", "Didi060806");
define("DBNAME", "celke");
define("PORTA", "3308");