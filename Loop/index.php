<?php

//Tsüklid

//
/*
 * * for($jm = alg; $jm < lopp; $jm++){
 * *tegevused, mis sooritatakse nii kaua, kui tsükli $jm väärtus on väiksem kui lõppväärtus
 *
 */

echo '<h4>Tsüklid - for </h4>';

$varv = ' ';
for($arv = 1; $arv <= 10; $arv++) {
    if ($arv % 2 == 0) {
        $varv = 'green';
    } else {
        $varv = 'red';
    }
    echo '<p style = "color: ' . $varv . '">.$arv.';
}


echo '<table>';

for($rida = 1; $rida <= 5; $rida++) {
    $varv = '#';
    for($kord = ; $kord <= 6; $kord)
    $varv = '#'.rand(0,9).rand(0,9).rand(0,9);
    echo ''
    if($arv % 2 == 0) {
        $varv = 'green';
    } else {
        $varv = 'red';
    }
        echo '<p style = "color: '.$varv.'">.$arv.';
    }
echo '</table>';