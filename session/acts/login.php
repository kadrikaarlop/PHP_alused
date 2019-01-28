<?php
require_once '../db/conf.php';
require_once '../db/db_fnk.php';
// andmed HTML vormi poolt
$username = $_GET['uname'];
$password = $_GET['upass'];

//loome ühenduse anmebaasiga
$ikt = connect_db(DBHOST,DBUSER,DBPASS,DBNAME);

//küsime kasutaja andmete olemasolu andmebaasis
$sql = 'SELECT * FROM user WHERE username="'.$username.'" AND password="'.md5($password).'"';
$users = getData($sql, $ikt);

// väljastame andmed
echo $users[0]['first_name'].' '.$users[0]['last_name']

