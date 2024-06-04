<?php
require_once 'Mesin.php';

class MesinListrik implements Mesin {
    public function mulai() {
        echo "Mesin listrik mulai...\n";
    }
}
