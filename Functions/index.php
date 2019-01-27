
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

// Et funktsioon töötaks, on sulgude sees muutuja $txt
//Väärtus, mis me anname f-i väljakutsumise hetkel,
//sisestatakse muutuja sisse

//Funktsioon, mis tagastab väärtuseid

function addNums($esimenenumber, $teinenumber)
{
    $vastus = $esimenenumber + $teinenumber;
    return $vastus; 11;
}
    print addNums(3,5);
//Funktsioon kutsuti välja kahearvulise argumendiga
echo "<br>";

//Funktsiooni dünaamilised väljakutsed

function ytleTere()
{
    print "tere<br>";
}
$function_hoidja = "ytleTere";
$function_hoidja();
//muutujasse salvestatakse sõne
//lisades f-i nimele sulud, saame f-i välja kutsuda
?>

</body>
</html>




