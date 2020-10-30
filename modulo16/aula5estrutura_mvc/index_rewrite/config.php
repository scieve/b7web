<?php
require 'environment.php';

$config = array();

if(ENVIRONMENT == 'development'){
    define("BASE_URL", "http://localhost/b7web/modulo16/aula5estrutura_mvc/index_rewrite");
    $config['dbname'] = 'estrutura_mvc';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
} else {
    define("BASE_URL", "http://localhost/b7web/modulo16/aula5estrutura_mvc/index_rewrite");
    $config['dbname'] = 'estrutura_mvc';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}

global $db;
try{
    $db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'],
     $config['dbuser'], $config['dbpass']);
     
}

catch (PDOException $e) {
    echo "ERRO: ".$e->getMessage();
    exit;

}