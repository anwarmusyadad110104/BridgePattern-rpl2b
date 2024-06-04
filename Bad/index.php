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
$mobilDenganMesinListrikDanRodaEmpat = new Mobil($mesinListrik, $rodaEmpat);

$motorDenganMesinBensinDanRodaDua = new Motor($mesinBensin, $rodaDua);
$motorDenganMesinListrikDanRodaDua = new Motor($mesinListrik, $rodaDua);


echo "Output Mobil dengan Mesin Bensin dan Roda Empat:<br>";
$mobilDenganMesinBensinDanRodaEmpat->mulai();
$mobilDenganMesinBensinDanRodaEmpat->bergerak();
echo "<br><br>";


echo "Output Mobil dengan Mesin Listrik dan Roda Empat:<br>";
$mobilDenganMesinListrikDanRodaEmpat->mulai();
$mobilDenganMesinListrikDanRodaEmpat->bergerak();
echo "<br><br>";

echo "Output Motor dengan Mesin Bensin dan Roda Dua:<br>";
$motorDenganMesinBensinDanRodaDua->mulai();
$motorDenganMesinBensinDanRodaDua->bergerak();
echo "<br><br>";


echo "Output Motor dengan Mesin Listrik dan Roda Dua:<br>";
$motorDenganMesinListrikDanRodaDua->mulai();
$motorDenganMesinListrikDanRodaDua->bergerak();
echo "<br><br>";
