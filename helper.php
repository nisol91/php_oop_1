<?php


use Src\Macchina;




//function to_log( Macchina $macchina)
//{
//    $nomelog = 'car.log';
//    $data = date('Y-m-d, H:i:s');
//
//    $log = $data."\t".$macchina->getMarca()."\t".$macchina->getModello()."\t".$macchina->getCarb()."\t".$macchina->getKm().'km'."\t".$macchina->getTarg()."\t".$macchina->getMessage()."\n";
//
//    // Apertura file
//
//    if($file = @fopen($nomelog, 'a'))
//    {
//
//        fwrite($file, $log);
//        fclose($file);
//
//    }
//}
//function clear_log () {
//    $nomelog = 'car.log';
//
//    fopen($nomelog, 'a');
//
//    file_put_contents($nomelog, ' ');
//
//    fclose($nomelog);
//
//
//}
