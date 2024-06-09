<?php
require_once 'Tipe/Tipe.php';

abstract class Kendaraan {
    protected $mesin;
    protected $roda;

    public function __construct(Tipe $mesin, Tipe $roda) {
        $this->mesin = $mesin;
        $this->roda = $roda;
    }

    abstract public function mulai();
    abstract public function bergerak();
}
