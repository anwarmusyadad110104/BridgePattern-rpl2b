<?php
// Mobil.php
require_once 'Kendaraan.php';

class Mobil extends Kendaraan {
    public function mulai() {
        echo "Mobil ";
        $this->mesin->mulai();
    }

    public function bergerak() {
        echo "Mobil bergerak...\n";
        $this->roda->putar();
    }
}
