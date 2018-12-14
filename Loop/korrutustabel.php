<?php

echo '<table>';
for($rida = 1; $rida <= 5; $rida++){
    echo '<tr>';
    for($veerg = 1; $veerg <= 5; $veerg++) {
        $varv = '#';
        for($kord = 1; $kord <= 6; $kord++){
            $varv = $varv.dechex(rand(0,15));
        }
        echo '<td style="background: ' . $varv . '">';
        echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';

echo '<hr>';
// korrutustabel
echo '<table style="border-collapse: collapse">';
// ülemine sinine riba - algus - tühi kast
echo '<th style="width: 20px; text-align: center; border: solid 1px black; background: cornflowerblue">&nbsp;</th>';
// ülemine sinine riba - numbrid 1-10
for($arv2 = 1; $arv2 <= 10; $arv2++){
    echo '<th style="width: 20px; text-align: center; border: solid 1px black; background: cornflowerblue">';
    echo $arv2;
    echo '</th>';
}
// põhitabel
for($arv1 = 1; $arv1 <= 10; $arv1++){
    echo '<tr>'; // rea algus
    // üks sinine kast
    echo '<th style="width: 20px; text-align: center; border: solid 1px black; background: cornflowerblue">';
    echo $arv1;
    echo '</th>';
    // korrutustabeli elemendid - korrutamise tulemused
    for($arv2 = 1; $arv2 <= 10; $arv2++) {
        echo '<td style="width: 20px; text-align: center; border: solid 1px black;">';
        echo $arv1 * $arv2;
        echo '</td>';
    }
    echo '</tr>'; // rea lõpp
}
echo '</table>'; // tabeli lõpp

echo "<hr>";

$arv =123;

$numbriteSumma = 0;
while ($arv != 0) {
    //leiame numbri
    $number = $arv % 10;
    // valmistame arvu järgmiseks tsükli sammuks
    echo 'Number = ' . $number . '<br>';
    $arv = $arv / 10;
    echo 'Uus arv on ' . $arv . '<br>';
    echo 'Hetkel summa = ' .$numbriteSumma . '<br>';

    //leiame hetkel oleva arvude summa
    $numbriteSumma = $numbriteSumma + $number;
    echo 'Hetkel summa = '.$numbriteSumma.'<br>';
}
echo '<b>Lõplik summa = '.$numbriteSumma.'<br></b>';

echo '<hr>';

$arv = 442158755745;
//leia, mitu korda esineb siin number 5

$numberKokku = 0;
while($arv != 0) {
   $number = $arv % 10;
   if($number == 5) {
     $numberKokku = $numberKokku + 1;
   }
   $arv = $arv / 10;
   settype($arv, 'int');
}
echo 'Number 5 esineb antud arvus'.$numberKokku.'korda<br>';