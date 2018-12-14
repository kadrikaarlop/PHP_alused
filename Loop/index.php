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