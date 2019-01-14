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

$charachter = array(
    name=>"bob",
    occupation=>"superhero",
    age=>30,
    "special power"=>"x-ray vision"
);
print $charachter[age];

$charachter[name] = "bob";
$charachter[occupation]="superhero";
$charachter[age] = 30;
$charachter["special power"] = "x-ray vision";

