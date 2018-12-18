<?php

$kasutajad = array(
    array(
        'alice',
        'Alice',
        'Liddell',
        'female'
    ),

    array(
        'bob',
        'Bob',
        'builder',
        'male'
    )
);
for($i = 0; $i < count($kasutajad); $i++){
    foreach ($kasutajad[$i] as $info){
        if ($kasutajad[$i][3] == 'female'){
        echo '<div style = "color: red">';
        }   else {
        echo '<div style = "color: blue">';
        }
    echo $info.'<div>';
    }
    echo '<hr>';
}



