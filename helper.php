<?php


use Src\Macchina;




function to_log( Macchina $macchina, $stringa)
{
    $nomelog = 'car.log';
    $data = date('Y-m-d, H:i:s');

    var_dump($macchina);
    $log = $data."\t".$macchina->getMarca()."\t".$macchina->getModello()."\t".$macchina->getCarb()."\t".$macchina->getKm()."\t".$macchina->getTarg()."\t".$macchina->getCode()."\t".$macchina->getMessage()."\n";

    // Apertura file

    if($file = @fopen($nomelog, 'a'))
    {
        fwrite($file, $log);
        fclose($file);
    }
}
