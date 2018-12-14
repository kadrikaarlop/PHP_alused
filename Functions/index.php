<?php

//funktsioon
//function funktsiooniNimi($param1, $param2,...) {
//tegevused, mis toimuvad funktsiooni sees

//leia, mitu korda esineb siin number 5

function numbriteKordumine($arv, $kontrollNumber) {

    echo 'Arv on '. $arv . '<br>';
    $numberKokku = 0;
    while($arv != 0) {
        $number = $arv % 10;
        if($number == $kontrollNumber) {
            $numberKokku = $numberKokku + 1;
        }
        $arv = $arv / 10;
        settype($arv, 'int');
    }
    echo 'Number '.$kontrollNumber.' esineb antud arvus '. $numberKokku. ' korda<br>';
}
numbriteKordumine(442158755745, 5);
$arv = 442158755745;
