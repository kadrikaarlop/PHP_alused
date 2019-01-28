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
