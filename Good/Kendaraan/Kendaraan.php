<?php
require_once 'Mesin/Mesin.php';
require_once 'Roda/Roda.php';

abstract class Kendaraan {
    protected $mesin;
    protected $roda;

    public function __construct(Mesin $mesin, Roda $roda) {
        $this->mesin = $mesin;
        $this->roda = $roda;
    }

    abstract public function mulai();
    abstract public function bergerak();
}
