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
echo '<br>';
echo '<hr>';

//Massiivi läbivaatamine tsükli abil

$users = array('Kadri', 'Merle', 'Merliti', 'Rando');
foreach ($users as $val )
{
print "$val<br>";
}
echo '<br>';
echo '<hr>';

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
echo '<hr>';

//Mitmemõõtmelise massiivi väljastamine

$charachters = array(

    array ('name'=>"bob",
        'occupation'=>"superhero",
        'age'=>'30',
        'special power'=>'x-ray vision'),

    array(
        'name'=>"sally",
        'occupation'=>"superhero",
        'age'=>'24',
        'special power'=>'superhuman strenght'),

    array(
        'name'=>"mary",
        'occupation'=>"arch villain",
        'age'=>'63',
        'special power'=>'nanotechnology')
    );

    foreach ($charachters as $val)
    {
    foreach ( $val as $key=>$final_val)
    {
        print "$key:$final_val<br>";
    }
        print "<br>";
    }
echo '<hr>';
echo '<br>';

//Massiivide juhtimine
//Massiivine ühendamine array_merge () funktsiooni abil

$esimene =array("a", "b", "c");
$teine = array(1, 2, 3);
$kolmas =array_merge($esimene, $teine);
foreach ($kolmas as $val)
{
    print "@val<br>";
}
echo '<hr>';
echo '<br>';

?>