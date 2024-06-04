<?php
class Mobil {
    protected $mesin;
    protected $roda;

    public function __construct($mesin, $roda) {
        $this->mesin = $mesin;
        $this->roda = $roda;
    }

    public function mulai() {
        echo "Mobil ";
        $this->mesin->mulai();
    }

    public function bergerak() {
        echo "Mobil bergerak...\n";
        $this->roda->putar();
    }
}
