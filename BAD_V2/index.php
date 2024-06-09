<?php
require_once 'Kendaraan/Kendaraan.php';
require_once 'mobilBensin/mobilBensin.php';
require_once 'mobilListrik/mobilListrik.php';
require_once 'motorBensin/motorBensin.php';
require_once 'motorListrik/motorListrik.php';

// Create instances of each vehicle class
$mobilBensin = new mobilBensin();
$mobilListrik = new mobilListrik();
$motorBensin = new motorBensin();
$motorListrik = new motorListrik();

// Demonstrate the functionality of each vehicle
echo "Mobil Bensin:\n";
$mobilBensin->mulai();
$mobilBensin->rodaempat();
$mobilBensin->mesinbensin();
$mobilBensin->bergerak();

echo "\n\nMobil Listrik:\n";
$mobilListrik->mulai();
$mobilListrik->rodaempat();
$mobilListrik->mesinlistrik();
$mobilListrik->bergerak();

echo "\n\nMotor Bensin:\n";
$motorBensin->mulai();
$motorBensin->rodadua();
$motorBensin->mesinbensin();
$motorBensin->bergerak();

echo "\n\nMotor Listrik:\n";
$motorListrik->mulai();
$motorListrik->rodadua();
$motorListrik->mesinlistrik();
$motorListrik->bergerak();
?>
