<?php

$vetor1 = [

    "A" => "Água com limão",
    "B" => "Bacon",
    "C" => "Cúrcuma",
    "D" => "Doce de leite",
    "E" => "Azeite",
    "F" => "Frango",
    "G" => "Gengibre",
    "H" => "Adoçante",
    "I" => "Açúcar",
    "J" => "Jiló",
    "K" => "Kombucha",
    "L" => "Leite",
    "M" => "Macarrão",
    "N" => "Nata",
    "O" => "Ovo",
    "P" => "Pizza",
    "Q" => "Óleo de coco",
    "R" => "Rabanada",
    "S" => "Suco detox",
    "T" => "Sal rosa",
    "U" => "Glutamina",
    "V" => "Doce low carb",
    "W" => "Whey protein",
    "X" => "Própolis",
    "Y" => "Comida japonesa",
    "Z" => "Peixe"
];



$vetor2 = [
    "Janeiro" => "ao acordar",
    "Fevereiro" => "pré-treino",
    "Março" => "injetável",
    "Abril" => "no cabelo",
    "Maio" => "em jejum",
    "Junho" => "de 3 em 3 horas",
    "Julho" => "no chá",
    "Agosto" => "no café",
    "Setembro" => "depois da 18:00",
    "Outubro" => "pós-treino",
    "Novembro" => "no almoço",
    "Dezembro" => "antes de dormir"

];

$vetor3 = [
    "1" => "diminui inchaço",
    "2" => "previne infarto",
    "3" => "cura TPM",
    "4" => "emagrece",
    "5" => "diminui vontade de doce",
    "6" => "mata",
    "7" => "limpar o fígado",
    "8" => "remove todas a toxinas",
    "9" => "previne diabete",
    "10" => "cura dores de cabeça",
    "11" => "causa depressão",
    "12" => "vicia",
    "13" => "elimina barriga",
    "14" => "te deixa mais bonita(o)",
    "15" => "acaba com a celulite",
    "16" => "faz o cabelo crescer",
    "17" => "diminui estresse",
    "18" => "melhora a TPM",
    "19" => "remove espinha",
    "20" => "elimina estria",
    "21" => "deixa mais inteligente",
    "22" => "elimina ansiedade",
    "23" => "aumenta libido",
    "24" => "te deixa musculosa(o)",
    "25" => "rejuvenesce",
    "26" => "engorda",
    "27" => "da barriga",
    "28" => "da celulite",
    "29" => "elimina indisposição",
    "30" => "limpa as artérias",
    "31" => "ajuda a desinchar",
];


if (isset($_GET['letra'])) {
    $letra = $_GET['letra'];
    $mes = $_GET['mes'];
    $dia = $_GET['dia'];
}

function mostar($letra, $mes, $dia)
{
    echo "$letra $mes, $dia.";
}

if (isset($_GET['letra' && 'mes' && 'dia'])) {
  mostar($letra, $mes, $dia);  
}


require 'gerador_view.php';
