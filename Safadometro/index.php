<?php
function somatorio($n)
{
    $soma = 0;
    for ($i = 1; $i <= $n; $i++) {
        $soma += $i;
    }
    return $soma;
}
function safadao($dia, $mes, $ano)
{
    $safadeza = somatorio($mes) + ($ano / 100) * (50 - $dia);
    $anjo = 100 - $safadeza;

    echo "$anjo% anjo perfeito, mas aquele $safadeza% é vagabundo.";
}

if (isset($_GET['dia'])) {
    $dia = (int) $_GET['dia'];
    $mes = (int) $_GET['mes'];
    $ano = (int) $_GET['ano'];
}

require 'safadometro_view.php';
