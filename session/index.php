<?php
session_start();
require_once 'fnk.php';
//$loginForm = htmlFromFile('login');
//echo $loginForm;

if(isset($_SESSION['user'])){
    echo 'Tere tulemast, '.$_SESSION['user']['last_name'].'!<br>';
} else {
    $loginForm = htmlFromFile('login');
    echo $loginForm;
}