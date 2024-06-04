<?php
class Motor {
    protected $mesin;
    protected $roda;

    public function __construct($mesin, $roda) {
        $this->mesin = $mesin;
        $this->roda = $roda;
    }

    public function mulai() {
        echo "Motor ";
        $this->mesin->mulai();
    }

    public function bergerak() {
        echo "Motor bergerak...\n";
        $this->roda->putar();
    }
}
