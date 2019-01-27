
<!doctype html>
<html>
<head>
    <title>Funktsioonid - väljakutsumine -print()funktsioon</title>
</head>
<body>
<?php

// abs tagastab arvu absoluutväärtuse
$num = - 321;
$newnum = abs ($num);
print $newnum;

//või print (abs(-321));

//Funktsiooni loomine ehk defineerimine

function some_function ($argument_1, $argument_2)
{
    //funktsiooni sisu
}


// Funksioon bighello ei kasuta argumente

function bighello()
{
    print '<h1>HELLO!</h1>';
}
bighello();

//Funktsioon argumentidega

function printBR($txt)
{
    print("$txt<br>\n");
}
printBR('See on rida');
printBR('See on juba uus rida');
printBR('Vaata, siin on veel üks rida');



?>
</body>
</html>




