<?php
//função e adiciona palavras para determinados valores
function valorEmPalavras($valor) {
    $unidades = array("", "um", "dois", "três", "quatro", "cinco", "seis", "sete", "oito", "nove");
    $dezenas = array("", "dez", "vinte", "trinta", "quarenta", "cinquenta", "sessenta", "setenta", "oitenta", "noventa");
    $centenas = array("", "cento", "duzentos", "trezentos", "quatrocentos", "quinhentos", "seiscentos", "setecentos", "oitocentos", "novecentos");    
    $reais = floor($valor);   
    $reais_texto = "";
    if ($reais >= 2) {
        if ($reais >= 100 && $reais < count($centenas)) {
            $reais_texto .= $centenas[floor($reais / 100)] . " ";
            $reais %= 100;
        }
        if ($reais >= 10 && $reais <= 19) {
            $reais_texto .= $dezenas[$reais - 10] . " ";
        } else {
            if ($reais >= 20 && $reais < count($dezenas)) {
                $reais_texto .= $dezenas[floor($reais / 10)] . " ";
                $reais %= 10;
            }
            if ($reais > 0 && $reais < count($unidades)) {
                $reais_texto .= $unidades[$reais] . " ";
            }
        }
        $reais_texto .= "reais";
    }
}
?>