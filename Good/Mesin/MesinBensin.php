<?php
require_once 'Mesin.php';

class MesinBensin implements Mesin {
    public function mulai() {
        echo "Mesin bensin mulai...\n";
    }
}
