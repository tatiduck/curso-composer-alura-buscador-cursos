<?php

require 'vendor/autoload.php';
//require 'Alura/BuscadorDeCursos/Buscador.php';


use Alura\BuscadorDeCursos\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['base_uri' => 'https://www.alura.com.br/','verify' => false]);  //cliente http
$crawler = new Crawler();

$buscador = new Buscador ($client, $crawler);
$cursos = $buscador->buscar('cursos-online-programacao/php'); 


foreach ($cursos as $curso) {
    echo $curso . PHP_EOL;
}
  //





/*$client = new Client(['base_uri' => 'https://www.alura.com.br/']);
$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar('/cursos-online-programacao/php');

foreach ($cursos as $curso) {
    echo $curso . PHP_EOL;*/