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

//----------------

//    foreach ($macchine as $item) {
//
//
//        $auto[$item['id']] = new Macchina($item['marca'], $item['modello']);
//        $auto[$item['id']]->setCarb($item['carburante']);
//        $auto[$item['id']]->setKm($item['km']);
//        $auto[$item['id']]->setTarg($item['targa']);
//    }

//----------------


//    $auto[0] = new Macchina('Peugeot', '208');
//    $auto[0]->setCarb('benz');
//    $auto[0]->setKm('234000');
//    $auto[0]->setTarg('123kdj');
//
//    $auto[1] = new Macchina('Mazda', '5');
//    $auto[1]->setCarb('benz');
//    $auto[1]->setKm('500000');
//    $auto[1]->setTarg('586vfe');
//
//    $auto[2] = new Macchina('Nissan', 'X-Trail');
//    $auto[2]->setCarb('gasolio');
//    $auto[2]->setKm('40000');
//    $auto[2]->setTarg('059clf');
//
//    $auto[3] = new Macchina('BMW', 'X5');
//    $auto[3]->setCarb('benz');
//    $auto[3]->setKm('100000');
//    $auto[3]->setTarg('384ork');
//
//    $auto[4] = new Macchina('Toyota', 'RAV4');
//    $auto[4]->setCarb('gasolio');
//    $auto[4]->setKm('59000');
//    $auto[4]->setTarg('475eos');


    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <h1>Test Mustache</h1>
    <?php
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
    ?>
</body>
</html>
