<?php
require_once 'Kendaraan/Kendaraan.php';

class mobilBensin extends Kendaraan {
    public function mulai() {
        echo "Mobil dengan ";
        $this->mesinbensin();
    }

    public function rodaempat() {
        echo "Roda empat berputar...\n";
    }

    public function rodadua() {
        // tidak ada implementasi untuk mobil
    }

    public function mesinbensin() {
        echo "mesin bensin mulai..\n";
    }

    public function mesinlistrik() {
        // tidak ada implementasi untuk mobil bensin
    }

    public function bergerak() {
        echo "Mobil bensin bergerak...\n";
    }
}
?>
