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

foreach ($kasutajad as $kasutaja){
    foreach ($kasutaja as $info){
        echo $info.'<br>';
    }
    echo '<hr>';
}

