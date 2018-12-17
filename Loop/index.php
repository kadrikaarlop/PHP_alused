<?php

//Tsüklid

//
/*
 * * for($jm = alg; $jm < lopp; $jm++){
 * *tegevused, mis sooritatakse nii kaua, kui tsükli $jm väärtus on väiksem kui lõppväärtus
 *
 */

echo '<h4>Tsüklid - for </h4>';

echo '<table>';

    echo '<tr>';
        for($arv2 = 0; $arv2 <= 10; $arv2++){
            echo '<th style = "width: 20px; text-align: center; border: solid black; background: greenyellow;">';
            echo $arv2;
            echo '</th>';
        }
    echo '</tr>';
for($arv1 = 1; $arv1 <= 10; $arv1++){
    echo '<tr>';
    echo '<th style = "width: 20px; text-align: center; border: solid black; background: coral;">';
    echo $arv1;
    echo '</th>';
    for($arv2 = 1; $arv2 <= 10; $arv2++) {

    echo '<td style = "width: 20px; text-align: center; border: solid black;">';
    echo ($arv1 * $arv2);
    echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';

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