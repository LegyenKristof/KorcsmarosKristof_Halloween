<?php

namespace Petrik14S\KorcsmarosKristof\Halloween\Models;

use DateTime;

class Esemeny {
    private $nev;
    private $szervezo;
    private $resztvevok;
    private $ido;

    public function __construct(string $nev, Lako $szervezo, array $resztvevok, DateTime $ido) {
        $this->nev = $nev;
        $this->szervezo = $szervezo;
        $this->resztvevok = $resztvevok;
        $this->ido = $ido;
    }

    public function getNev() : string {
        return $this->nev;
    }

    public function getSzervezo() : Lako {
        return $this->szervezo;
    }

    public function getResztvevok() : array {
        return $this->resztvevok;
    }

    public function getIdo() : DateTime {
        return $this->ido;
    }
}