<?php
require_once 'Kendaraan/Kendaraan.php';

class mobilListrik extends Kendaraan {
    public function mulai() {
        echo "Mobil dengan ";
        $this->mesinlistrik();
    }

    public function rodaempat() {
        echo "Roda empat berputar...\n";
    }

    public function rodadua() {
        // tidak ada implementasi untuk mobil
    }

    public function mesinbensin() {
        // tidak ada implementasi untuk mobil listrik
    }

    public function mesinlistrik() {
        echo "mesin listrik mulai...\n";
    }

    public function bergerak() {
        echo "Mobil listrik bergerak...\n";
    }
}
?>
