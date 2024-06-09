<?php
require_once 'Kendaraan/Kendaraan.php';

class motorListrik extends Kendaraan {
    public function mulai() {
        echo "Motor dengan ";
        $this->mesinlistrik();
    }

    public function rodadua() {
        echo "Roda dua berputar...\n";
    }

    public function rodaempat() {
        // tidak ada implementasi untuk motor
    }

    public function mesinbensin() {
        // tidak ada implementasi untuk motor listrik
    }

    public function mesinlistrik() {
        echo "mesin listrik mulai...\n";
    }

    public function bergerak() {
        echo "Motor listrik bergerak...\n";
    }
}
?>
