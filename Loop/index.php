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
for($arv = 1; $arv <= 10; $arv1++){
    echo '<tr>';
    for($arv2 = 1; $arv2 <= 10; $arv2++) {
        echo $arv1;
    }
        echo ($arv1 * $arv2).'<td>';
    }
    echo '<td style = "width: 20 px; text-align: center; border: solid black;">
    echo '</td>';
} echo '</tr>
echo '</table>';