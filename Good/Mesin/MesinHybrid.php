<?php
require_once 'Mesin.php';

class MesinHybrid implements Mesin
{
    public function mulai()
    {
        return "Mesin hybrid mulai...";
    }

    public function bergerak()
    {
        return "Mobil/Motor bergerak..."; // sesuaikan dengan kebutuhan
    }
}
