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

echo '<br>';
//Harjutamine - Ülesanded

//Kuva kuupäev ja kellaaeg formaadis 20.03.2013 12:31
echo date('d.m.Y G:i' , time()).'<br>';

//Kuva tänane eestikeelne nädalapäev, N: kolmapäev
$eesti_np = array(
    'Mon' => 'Esmaspäev',
    'Tue' => 'Teisipäev',
    'Wed' => 'Kolmapäev',
    'Thu' => 'Neljapäev',
    'Fri' => 'Reede',
    'Sat' => 'Laupäev',
    'Sun' => 'Pühapäev'
);
$nadalapaev = $eesti_np[date('D')];

echo 'N:'.$nadalapaev.'<br>';
echo '<br>';
//Eestikeelne kuupäev koos nädalapäevaga
echo 'Eestikeelne kuupäev koos nädalapäevaga: '.$paev.'.'.$kuu.'.'.$aasta.', '.$nadalapaev.'<br><br>';
$tana = time();

//Mitu päeva on jaanipäevani?
//$jaanipaev = (date('d.m.Y', '24.06.2019'));
$jaanipaev = strtotime("24 June 2019");
$vahe = $jaanipaev - $tana;
echo date('Y', time()).'.aasta jaanipäevani on jäänud '.round($vahe / (60*60*24)).' päeva.<br>';

//Metsheina ja minu sünnipäev
$metsheina_sp = mktime(0,0,0,11,06,1980);
$minu_sp = mktime(0,0,0,05,05,1983);
$metsheina_spd = date('d.m.Y', $metsheina_sp);
$minu_spd = date('d.m.Y', $minu_sp);
$vahe = ($minu_sp - $metsheina_sp);
$vanusevahe = ($vahe / (60 * 60 * 24 * 365));
echo  'Metsheina sünnikuupäev on: '.$metsheina_spd.', minu sünnikuupäev on: '.$minu_spd.
    '. Meie vanusevahe on: '.number_format($vanusevahe, 1).'<br>';

//Maailmalõpp saabub 29.02.2016! Las PHP otsustab, kas see on võimalik.
if (checkdate(02,29,2016)) {
    echo '29.02.2016 oleks olnud maailmalõpp!<br>';
} else {
    echo '29.02.2016 ei oleks olnud maailmalõpp!<br>';
}

//Kas mul on järgmisel aastal juubel
$sel_aastal = date('Y', time());
$jargmisel = $sel_aastal + 1;
$vanus_jarg_a = $jargmisel - date('Y', mktime(0,0,0,6,2,1999));
//echo $nxtyr - date('Y', mktime(0,0,0,6,2,1999));

$vanus_jarg_a = (string)$vanus_jarg_a;
if ($vanus_jarg_a[strlen($vanus_jarg_a)-1] == 0 or $vanus_jarg_a[strlen($vanus_jarg_a)-1] == 10){
    echo 'Järgmisel aastal olen ma '.$vanusnxtyr.' aastane ning mul on juubel.';
} else {
    echo 'Järgmisel aastal olen ma '.$vanusnxtyr.' aastane ning mul ei ole juubelit.';
}