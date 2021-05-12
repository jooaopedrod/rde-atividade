<?php

const ID = "p8fhw5rstysfI8dd2qBq8";
const SECRET = "YYoa9a3yZa4Nj9GTRKSBOqD6R4C3yEHIrnUmxQPK";

const BASE_URL = "https://api.aerisapi.com/conditions/";

$cidade = "";

if (isset($_GET['nome_cidade'])) {
    $cidade = $_GET['nome_cidade'];
    $cidade = urlencode($cidade);
}


$url = BASE_URL . "{$cidade},br?client_id=" . ID . "&client_secret=" . SECRET;

$json  = file_get_contents($url);
$dados = json_decode($json, true);



if (isset($_GET['nome_cidade'])) {
    $nomeCidade = $dados['response'][0]['place']['name'];
    $temperatura = $dados['response'][0]['periods'][0]['tempC'];
    $sensacaoTermica = $dados['response'][0]['periods'][0]['feelslikeC'];
    $umidade = $dados['response'][0]['periods'][0]['humidity'];
    $velocidadeVento = $dados['response'][0]['periods'][0]['windSpeedKPH'];
    
}



include "clima-view.php";
