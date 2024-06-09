<?php
require_once 'Tipe.php';

class Roda implements Tipe {
    private $jumlah;

    public function __construct($jumlah) {
        $this->jumlah = $jumlah;
    }

    public function mulai() {
        //Metode ini mungkin tidak diperlukan untuk Roda, 
        //tetapi kita harus mengimplementasikannya sebagai
        // bagian dari interface Tipe.
    }

    public function putar() {
        echo "Roda " . $this->jumlah . " berputar...\n";
    }
}
