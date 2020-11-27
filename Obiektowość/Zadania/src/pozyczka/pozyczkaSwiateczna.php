<?php
require_once('pozyczka.php');

class PozyczkaSwiateczna extends Pozyczka
{

    private static $dataPoczatekAkcji;
    private static $dataKoniecAkcji;
    private $rabatNaSwieta = 0.01;

    public function __construct(
        $imie,
        $imieDrugie,
        $nazwisko,
        $kwota = 10000.0,
        $okresLata = 1,
        $dataPoczatekAkcji = null,
        $dataKoniecAkcji = null,
        $rabatNaSwieta = 0.01
    ) {
        parent::__construct(
            $imie,
            $imieDrugie,
            $nazwisko,
            $kwota,
            $okresLata
        );
        self::$dataPoczatekAkcji = new DateTime($dataPoczatekAkcji);
        PozyczkaSwiateczna::$dataPoczatekAkcji = new DateTime($dataKoniecAkcji);
    }
    public function __destruct()
    {
        echo __METHOD__ . " " . spl_object_hash($this) . PHP_EOL;
    }

    public static function pobierzPoczatekPozyczkaSwiateczna()
    {
        return PozyczkaSwiateczna::$dataPoczatekAkcji;
    }

    public static function pobierzKoniecPozyczkaSwiateczna()
    {
        return PozyczkaSwiateczna::$dataKoniecAkcji;
    }

    public static function ustawPoczatekPozyczkaSwiateczna($data)
    {
        PozyczkaSwiateczna::$dataPoczatekAkcji = $data;
    }

    public static function ustawKoniecPozyczkaSwiateczna($data)
    {
        PozyczkaSwiateczna::$dataKoniecAkcji = $data;
    }
    public function wyliczOprocentowanie()
    {
        $oprocentowanie = parent::wyliczOprocentowanie();
        $oprocentowanie -= $this->rabatNaSwieta;
        return $oprocentowanie;
    }
}
