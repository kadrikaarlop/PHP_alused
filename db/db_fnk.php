<?php
/**
 * @param $hostName
 * @param $dbUser
 * @param $dbPass
 * @param $dbName
 * @return mysqli
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

function query($sql, $conn){
    $result = mysqli_query($conn, $sql);
    if(!$result){
        echo 'Problem with <b>'.$sql.'</b><br>';
        exit;
    }
    return $result;
}
function getData($sql, $conn)
{
    $data = array();
    $result = query($sql, $conn);
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $data[] = $row;
    }
    return $data;
}