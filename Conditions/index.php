<?php

//tingimuslaused
//if(tingimused)
//tegevused, mis toimuvad, kui tegevused kehtivad
//else
//tegevused, mis toimuvad, kui tingimused ei kehti

echo '<h4>Tingimuslaused</h4>';

$foor ='punane';


switch ($foor){
    case 'punane':
        echo '<p style = "color: red">Punane tuli</p>';
        break;
    case 'kollane':
        echo '<p style = "color: orange">Kollane tuli</p>';
        break;
    case 'roheline':
        echo '<p style = "color: green">Roheline tuli</p>';
        break;
    default:
        echo '<p>Mingi muu!</p>';
}