<?php
require_once 'Kendaraan.php';

class Motor extends Kendaraan {
    public function mulai() {
        echo "Motor ";
        $this->mesin->mulai();
    }

    public function bergerak() {
        echo "Motor bergerak...\n";
        $this->roda->putar();
    }
}
