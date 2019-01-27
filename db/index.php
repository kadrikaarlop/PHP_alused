<?php
/**
 * @param $hostName
 * @param $dbUser
 * @param $dbPass
 * @param mysqli
 * Funktsioon, mis tekitab ühenduse andmebaasiga
 */
function connect_db($hostName, $dbUser, $dbPass, $dbName)
//ühenduse andmed salvestame muutuja $conn sisse,
//selle kaudu saab serverile saata päringuid jms
{
   $conn = mysqli_connect($hostName, $dbUser, $dbPass, $dbName);
   //kui ühendust mingil põhjusel ei ole
    //väljastatakse vastav veateade ja MySQL vea kirjeldus
    //koodi edaspidine töö lõpetatakse käsuga exit
    if(!$conn){
        echo 'Unable to connect to MySQL<br>';
        echo mysqli_connect_error().'<br>';
        exit;
    }
    //selleks, et me saaks edaspidi ühenduse andmeid kasutada,
    //tagastame need põhiprogrammile
    return $conn;
}

//katsetame ühenduse loomist ikt serveriga
//kõik andmed - cPaneli kausu loodud kasutaja, parool ja andmebaasi nimi
//localhost - veebiserver ja andmebaasiserver asuvad samas ikt masinas

require_once 'conf.php';
$iktConn = connect_db( DBHOST, DBUSER,  DBPASS, DBNAME);
//vaatame ühenduse sisu testkujul
echo '<pre>';
print_r($iktConn);
echo '</pre>';

?>