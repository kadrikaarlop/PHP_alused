<?php

//UNIX-stiilis ajatempli loomine
//sekundid, mida loetakse alates 01.01.1970
//Välja kutsub järgnev funktsioon
echo time();
echo '<br>';

//Kasutajasõbraliku kuupäeva kuvamine
// date-funktsioon vajab kahte argumenti
echo date('d.m.Y G:i' , time());
echo '<br>';

//Ajavöönd
date_default_timezone_set('Europe/Tallinn');
echo '<br>';

//Pika kuupäeva eestistamine
echo date('d.F.Y');
//Luuakse massiiv, kus eestikeelsed kuud algavad indeksiga 1
//Pärast seda tehakse päeva, kuu ja aasta jaoks eraldi muutujad
//Kasutatakse kuupäeva vormingut 'n'
echo '<br>';
$eesti_kuud = array(1=>'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'detsember');
//kuupäevad massiividesse
$paev = date('d');
$kuu = $eesti_kuud[date('n')];
$aasta = date('Y');
//kuupäeva väljastamine
echo $paev.'.'.$kuu.' '.$aasta;
//22.veebruar2013

//Soovitud kuupäeva genereerimine
mktime(tunnid, minutid, sekundid, kuu, päev, aasta, suveaeg);
echo '<br>';
$sp = mktime(0,0,0,5,5,1983);
echo date('d.m.Y', $sp);

//Tehted kuupäevadega
//sekundutega arvutamine
echo date('d.m.Y G:i' , time()+60);			//1min pärast
echo date('d.m.Y G:i' , time()+60*60);		//1h pärast
echo date('d.m.Y G:i' , time()+60*60*24);	//24h pärast
echo '<br>';

//päevade, kuude, aastatega arvutamine
$sp = mktime(0,0,0,10,29,1969-27);
echo date('d.m.Y', $sp);			//29.10.1942
echo '<br>';

//arvutamine inglise keelsete lausetega
echo strtotime("now");
echo strtotime("tomorrow");
echo strtotime("yesterday");
echo strtotime("10 September 2000");
echo strtotime("+1 day");
echo strtotime("+1 week");
echo strtotime("+2 week 3 days 4 hours 5 seconds");
echo strtotime("next Thursday");
echo strtotime("last Monday");
echo strtotime("5pm + 6 Hours");
echo strtotime("now + 4 fortnights");
echo strtotime("last Monday");
echo strtotime("4pm yesterday");
echo strtotime("6am 10 days ago");
echo'<br>';

//Kuupäeva valideerimine
//Kontrollitakse, kas selline kuupäev eksisteerib
if(checkdate(12,32,2013)) {
    echo('Kuupäev korras!');
} else {
    echo ('Kuupäev on valesti sisestatud');
}

