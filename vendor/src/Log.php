<?php


namespace Src;
use Macchina;





class Log
{
    private $nomelog = '';
    private $data = '';
    private $log = '';

    public function __construct($nomelog)
    {
        $this->nomelog = $nomelog;
        $this->data = date('Y-m-d, H:i:s');
    }

    public function setLog($log) {
        $this->log = $log;
    }

    public function to_log($macchina)
    {
        $this->log = $this->data."\t".$macchina->getMarca()."\t".$macchina->getModello()."\t".$macchina->getCarb()."\t".$macchina->getKm().'km'."\t".$macchina->getTarg()."\t".$macchina->getMessage()."\n";

    }

    public function clear_log () {
        $this->nomelog = 'car.log';

        fopen($this->nomelog, 'a');

        file_put_contents($this->nomelog, ' ');

        fclose($this->nomelog);

    }
    public function write_log() {

//   Apertura file

        if($file = @fopen($this->nomelog, 'a'))
        {
            fwrite($file, $this->log);
            fclose($file);
        }
    }

}
