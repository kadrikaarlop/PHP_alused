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

// Sidestatud massiivid

$charachter = array (
    'name'=>"bob",
    'occupation'=>"superhero",
    'age'=>30,
    "special power"=>"x-ray vision"
);
print $charachter['age'];

$charachter['name'] = "bob";
$charachter['occupation']="superhero";
$charachter['age'] = 30;
$charachter["special power"] = "x-ray vision";

//Mitmemõõtelised massiivid
$charachter = array(
    array (
        'name'=>"bob",
        'occupation'=>"superhero",
        'age'=>30,
        'speciality'=>"x-ray vision"
    ),
    array (
        'name'=>"sally",
        'occupation'=>"superhero",
        'age'=>24,
        'speciality'=>"nanotechnology" )
    );

print $charachter [0] ['occupation'];
print $charachter [2] ['age'];

echo '<pre>';
print_r($charachter);
echo '</pre>';

//Massiivi suuruse kättesaamine

print $kasutajad [4];

//Funktsiooni kasutamine viimasele elemendile juurdepääsu teostamiseks

$users = array('Kadri', 'Merle', 'Merliti', 'Rando');
print $users[count($users)-2];
echo '<br>';

//Massiivi läbivaatamine tsükli abil

$users = array('Kadri', 'Merle', 'Merliti', 'Rando');
foreach ($users as $val )
{
print "$val<br>";
}
echo '<br>';
//Sidestatud massiivi läbivaatamine tsüklis

$charachter = array (
        'name'=>"bob",
        'occupation'=>"superhero",
        'age'=>'30',
        'special power'=>'x-ray vision'
);

foreach ($charachter as $key=>$value )
{
    print "$key=$value<br>";
}
echo '<br>';
?>