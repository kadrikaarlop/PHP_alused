<?php

//tingimuslaused
//if(tingimused)
//tegevused, mis toimuvad, kui tegevused kehtivad
//else
//tegevused, mis toimuvad, kui tingimused ei kehti

echo '<h4>Tingimuslaused</h4>';

$arv = 2;

if($arv % 2 == 0) {

    echo '<p style ="color: green">'.$arv.'</p >;

    } else {

    echo '<p style ="color: red">'.$arv.'</p>';


}