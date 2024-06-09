<?php
require_once 'Kendaraan/Kendaraan.php';

class motorBensin extends Kendaraan {
    public function mulai() {
        echo "Motor dengan ";
        $this->mesinbensin();
    }

    public function rodadua() {
        echo "Roda dua berputar...\n";
    }

    public function rodaempat() {
        // tidak ada implementasi untuk motor
    }

    public function mesinbensin() {
        echo "mesin bensin mulai..\n";
    }

    public function mesinlistrik() {
        // tidak ada implementasi untuk motor bensin
    }

    public function bergerak() {
        echo "Motor bensin bergerak...\n";
    }
}
?>
