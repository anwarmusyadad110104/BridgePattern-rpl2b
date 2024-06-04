<?php
require_once 'Mesin/MesinBensin.php';
require_once 'Mesin/MesinListrik.php';
require_once 'Roda/RodaEmpat.php';
require_once 'Roda/RodaDua.php';
require_once 'Kendaraan/Mobil.php';
require_once 'Kendaraan/Motor.php';

$mesinBensin = new MesinBensin();
$mesinListrik = new MesinListrik();

$rodaEmpat = new RodaEmpat();
$rodaDua = new RodaDua();

$mobilDenganMesinBensinDanRodaEmpat = new Mobil($mesinBensin, $rodaEmpat);
$mobilDenganMesinListrikDanRodaDua = new Mobil($mesinListrik, $rodaDua);

$motorDenganMesinBensinDanRodaEmpat = new Motor($mesinBensin, $rodaEmpat);
$motorDenganMesinListrikDanRodaDua = new Motor($mesinListrik, $rodaDua);

$mobilDenganMesinBensinDanRodaEmpat->mulai();
$mobilDenganMesinBensinDanRodaEmpat->bergerak();
echo "<br><br>";

$mobilDenganMesinListrikDanRodaDua->mulai();
$mobilDenganMesinListrikDanRodaDua->bergerak();
echo "<br><br>";

$motorDenganMesinBensinDanRodaEmpat->mulai();
$motorDenganMesinBensinDanRodaEmpat->bergerak();
echo "<br><br>";

$motorDenganMesinListrikDanRodaDua->mulai();
$motorDenganMesinListrikDanRodaDua->bergerak();
echo "<br><br>";
