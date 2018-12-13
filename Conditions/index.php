<?php

//tingimuslaused
//if(tingimused)
//tegevused, mis toimuvad, kui tegevused kehtivad
//else
//tegevused, mis toimuvad, kui tingimused ei kehti

echo '<h4>Tingimuslaused</h4>';

$arv = rand(0, 100);
$varv = ' ';

if($arv >= 0 and $arv < 25) {
    $varv ='green';
    } else if($arv >=25 and $arv < 50) {
    $varv = 'red';
 } else if ($arv >=75 and $arv < 100) {
    }
