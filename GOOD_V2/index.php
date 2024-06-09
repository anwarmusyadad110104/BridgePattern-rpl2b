<?php
require_once 'Tipe/Mesin.php';
require_once 'Tipe/Roda.php';
require_once 'Kendaraan/Mobil.php';
require_once 'Kendaraan/Motor.php';

$mesinBensin    = new Mesin('Bensin');
$mesinListrik   = new Mesin('Listrik');
$rodaDua        = new Roda(2);
$rodaEmpat      = new Roda(4);

// Mobil
$mobil = new Mobil($mesinBensin, $rodaEmpat);
$mobilListrik = new Mobil($mesinListrik, $rodaEmpat);

// Motor
$motor = new Motor($mesinBensin, $rodaDua);
$motorListrik = new Motor($mesinListrik, $rodaDua);

$mobil->mulai();
$mobil->bergerak();
echo "\n";
$mobilListrik->mulai();
$mobilListrik->bergerak();
echo "\n";

$motor->mulai();
$motor->bergerak();
echo "\n";
$motorListrik->mulai();
$motorListrik->bergerak();
echo "\n";
// $mesinBensin = new MesinBensin();
// $mesinListrik = new MesinListrik();

// $rodaEmpat = new RodaEmpat();
// $rodaDua = new RodaDua();

// $mobilDenganMesinBensinDanRodaEmpat = new Mobil($mesinBensin, $rodaEmpat);
// $mobilDenganMesinListrikDanRodaDua = new Mobil($mesinListrik, $rodaDua);

// $motorDenganMesinBensinDanRodaEmpat = new Motor($mesinBensin, $rodaEmpat);
// $motorDenganMesinListrikDanRodaDua = new Motor($mesinListrik, $rodaDua);

// $mobilDenganMesinBensinDanRodaEmpat->mulai();
// $mobilDenganMesinBensinDanRodaEmpat->bergerak();
// echo "<br><br>";

// $mobilDenganMesinListrikDanRodaDua->mulai();
// $mobilDenganMesinListrikDanRodaDua->bergerak();
// echo "<br><br>";

// $motorDenganMesinBensinDanRodaEmpat->mulai();
// $motorDenganMesinBensinDanRodaEmpat->bergerak();
// echo "<br><br>";

// $motorDenganMesinListrikDanRodaDua->mulai();
// $motorDenganMesinListrikDanRodaDua->bergerak();
// echo "<br><br>";
