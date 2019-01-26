<?php
/**
 * Created by PhpStorm.
 * User: Kadriko
 * Date: 25.01.2019
 * Time: 15:58
 */

// ruumalade arvutamine

//Kera Ruumala valem

function keraRuumala($keraRaadius){
    return 4/3 * pi() * pow($keraRaadius, 3);
}
// pow on astendamine pow(value, power), alguses väärtus ja siis aste
// pi() on float - Pii=3,14


//Koonuse Ruumala valem
function koonuseRuumala($koonuseRaadius, $koonuseKorgus){
    return 1/3 * pi() * pow($koonuseRaadius, 2) * $koonuseKorgus;
}

//Silindri Ruumala valem
function silindriRuumala($silindriRaadius, $silindriKorgus){
    return pi() * pow($silindriRaadius, 2) * $silindriKorgus;
}





?>