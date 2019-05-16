<?php

namespace Src;
//proprieta private accessibili con set e get e in
// constructor definisco solo marca e modello, il resto
// lo definisco con set



class Macchina
{
    private $marca = '';
    private $modello = '';
    private $carb = '';
    private $km = '';
    private $targ = '';

    const LIMITE_NUMERI = 2;
    const LIMITE_LETTERE = 3;

    public function __construct($marca, $modello)
    {
        $this->marca = $marca;
        $this->modello = $modello;
    }
    public function getMarca() {
        return $this->marca;
    }
    public function getModello() {
        return $this->modello;
    }

    public function setCarb($carb) {
        $this->carb = $carb;
    }
    public function setKm($km) {
        $this->km = $km;
    }
    public function setTarg($targ) {
        $this->targ = $targ;
    }

    public function getCarb() {
        return $this->carb;
    }
    public function getKm() {
        return $this->km;
    }
    public function getTarg() {
        return $this->targ;
    }


//    metodi static

    /**
     * @param $limite
     * @param array|null $array
     * @return int|mixed
     */
    public static function extract_to_array($limite, Array $array = null) {
        $ris = rand(0, $limite);
        return ($array == null) ? $ris : $array[$ris];
    }

    public static function targ() {
        $alf = range('A', 'Z');
        $ris = '';
        for ($i = 0; $i < self::LIMITE_NUMERI; $i++) {
            $ris .= $alf[rand(0, count($alf) - 1)];
        }
        for ($i = 0; $i < self::LIMITE_LETTERE; $i++) {
            $ris .= rand(0, 9);
        }
        for ($i = 0; $i < self::LIMITE_NUMERI; $i++) {
            $ris .= $alf[rand(0, count($alf) - 1)];
        }

        return $ris;
    }

    /*
     * TODO
     * stringa di log: non deve essere in append ma deve essere sovrascritto ogni volta.
     * prima aggiungi un po di marche e di modelli
     * [yyy-mm-gg hh:mm:ss] <nome classe> : tipo di errore : macchina e attributi divisi da virgole(marca, modello, ecc...)
     * crea file di tipo helper e mettici questa funzione to_log , non metterla qui tra i metodi statici.
     * il messaggio di errore viene stampato quando c e un problema nella macchina. si definisce un attributo ulteriore che
     * mi dice se c e il problema oppure no. se il problema è tra 0 e 100 è di tipo ok,
     * se è tra 100 e 200 è warning, 200 300 critical, se invece è maggiore di 300 la macchina è da buttare.
     * creo quindi cartella di tipo log in cui metto il file car.log stampato.
     * il log parte all istanza dell oggetto Macchina, ovvero al refresh.
     * dentro a mustache stampo se c e warning , ok, critical o da buttare.
     */

    public static function to_log( Macchina $car ) {

    }
}