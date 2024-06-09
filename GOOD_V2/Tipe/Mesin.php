<?php
require_once 'Tipe.php';

class Mesin implements Tipe {
    private $jenis;

    public function __construct($jenis) {
        $this->jenis = $jenis;
    }

    public function mulai() {
        if ($this->jenis == 'Bensin') {
            echo "Mesin bensin mulai..\n";
        } elseif ($this->jenis == 'Listrik') {
            echo "Mesin listrik mulai..\n";
        }
    }

    public function putar() {
        echo "Mesin " . $this->jenis . " berputar..\n";
    }
}
