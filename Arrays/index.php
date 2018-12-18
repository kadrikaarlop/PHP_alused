<?php

$kasutajad = array();
    //tühi massiiv
//andmete lisamine

$kasutajad[] = 'Alice';
$kasutajad[] = 'Bob';
array_push($kasutajad, 'Lucy');

$lisakasutajad = array('mark', 'george');

echo '<pre>';
print_r($kasutajad);

echo '</pre>';

//var_dump($kasutajad);

for($i = 0; $i < 3; $i++){
    echo $kasutajad[$i].'<br>';
}

//massiivi pikkus

$kasutajadKokku =count($kasutajad);
for($i = 0; $i < 3; $i++){
    echo $kasutajad[$i].'<br>';
}

array_shift($kasutajad);
for($i = 0; $i < $kasutajadKokku; $i++){
    echo $kasutajad[$i].'<br>';
}

$uuedKasutajad = array_merge($kasutajad, $lisaKasutajad);
    for($i = 0; $i < count($uuedKasutajad), $i);{
    echo $uuedKasutajad[$i].'<br>';<
}

echo '<hr>';

foreach ($uuedKasutajad as $kasutaja) {
    echo $kasutaja.'<br>';
    }


