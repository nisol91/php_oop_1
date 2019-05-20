<?php
use Src\Macchina;
use Src\Log;

require 'vendor/autoload.php';

$macchine = macchine();

$auto = [];

//    clear_log();

$log_ = new Log('car.log');
//    var_dump($log_);
$log_->clear_log();


for ($i = 0; $i < 50; $i++) {
    $marca = Macchina::extract_to_array(count($macchine['marche']) - 1, $macchine['marche']);
    $car = new Macchina($marca, Macchina::extract_to_array(count($macchine['modelli'][$marca]) - 1, $macchine['modelli'][$marca]));
    $car->setCarb(Macchina::extract_to_array(count($macchine['carburante']) - 1, $macchine['carburante']));
    $car->setKm(Macchina::extract_to_array(500000));
    $car->setTarg(Macchina::targ());
    $numero = Macchina::extract_to_array(300);
    $car->setCode(Macchina::extract_to_array($numero));
    $car->setMessage(Macchina::code($numero));
    array_push($auto, $car);

//        to_log($car);


    $log_->to_log($car);
    $log_->write_log();


}

$template =
    ' 
               <p>Marca: {{ getMarca }} </p>
               <p>Modello: {{ getModello }} </p>
               <p>Carburante: {{ getCarb }} </p>
               <p>Km: {{ getKm }} </p>
               <p>Targa: {{ getTarg }} </p>
               <p>Codice: {{ getCode }} </p>
               <p>Messaggio: {{ getMessage }} </p>


               <p style="border-bottom: 1px solid #7a7b80;"></p>
        ';
$m = new Mustache_Engine;

foreach ($auto as $item) {
    echo $m->render($template, $item);
}
