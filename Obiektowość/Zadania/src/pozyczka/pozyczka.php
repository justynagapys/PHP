<?php
require_once('ipozyczka.php');

class Pozyczka implements IPozyczka {
    protected $imie;
    protected $imieDrugie;
    protected $nazwisko;
    protected $kwota = 10000.0;
    protected $okresLata = 1;

    protected $oprocentowanieStandardowe = 0.09;

    public function __construct(
        $imie,
        $imieDrugie,
        $nazwisko,
        $kwota = 10000.0,
        $okresLata = 1)
    {
        $this->imie = $imie;
        $this->imieDrugie = $imieDrugie;
        $this->nazwisko = $nazwisko;
        $this->kwota = $kwota;
        $this->okresLata = $okresLata;
    }
    function wyliczOprocentowanie()
    {
        $oprocentowanie = $this->oprocentowanieStandardowe;
        $oprocentowanie -= $this->okresLata * 0.001;
        $oprocentowanie -= $this->kwota > 10000 ? 0.005 : 0;
        return $oprocentowanie;
    }
}
?>