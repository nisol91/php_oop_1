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
    private $code = '';
    private $message = '';



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
    public function setCode($code) {
        $this->code = $code;
    }
    public function setMessage($message) {
        $this->message = $message;
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
    public function getCode() {
        return $this->code;
    }
    public function getMessage() {
        return $this->message;
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
     * [yyy-mm-gg hh:mm:ss] <nome classe> : tipo di errore : macchina e attributi divisi da virgole(marca, modello, ecc...)
     * crea file di tipo helper e mettici questa funzione to_log , non metterla qui tra i metodi statici.
     * il messaggio di errore viene stampato quando c e un problema nella macchina.
     * creo quindi cartella di tipo log in cui metto il file car.log stampato.
     * il log parte all istanza dell oggetto Macchina, ovvero al refresh.
     *
     *
     */



    public static function code($number) {
        if ($number < 100) {
            return 'ok';
        } else if ($number > 100 && $number < 200) {
            return 'warning';

        } else if ($number > 200 && $number < 300) {
            return 'critical';

        } else if ($number > 300) {
            return 'death';

        }
    }
}
