<?php
require 'aprendiz.php';

class Ficha{
    private $codigoFicha;
    private $aprendices = array();

    public function __construct($codigoFicha){
        $this->codigoFicha = $codigoFicha;
    }
    public function agregarAprendiz($aprendiz){
        $this->aprendices[] = $aprendiz;
    }
    public function getCodigoFicha(){
        return $this->codigoFicha;
    }
    public function getAprendices(){
        return $this->aprendices;
    }

}

$ficha1 = new Ficha("2560664B");
$ficha2 = new Ficha("2673630");
$ficha3 = new Ficha("2596049");
$ficha4 = new Ficha("2673948");
$ficha5 = new Ficha("2573729");

$ficha1->agregarAprendiz($aprendiz1);
$ficha1->agregarAprendiz($aprendiz2);
$ficha1->agregarAprendiz($aprendiz3);

$ficha2->agregarAprendiz($aprendiz4);
$ficha2->agregarAprendiz($aprendiz5);
$ficha2->agregarAprendiz($aprendiz6);

$ficha3->agregarAprendiz($aprendiz7);
$ficha3->agregarAprendiz($aprendiz8);
$ficha3->agregarAprendiz($aprendiz9);

$ficha4->agregarAprendiz($aprendiz10);
$ficha4->agregarAprendiz($aprendiz11);
$ficha4->agregarAprendiz($aprendiz12);

$ficha5->agregarAprendiz($aprendiz13);
$ficha5->agregarAprendiz($aprendiz14);
$ficha5->agregarAprendiz($aprendiz15);



echo $ficha1->getCodigoFicha(). "<br>";

echo $ficha1->getAprendices()[0]->getIdAprendiz(). "<br>";


foreach ($ficha1->getAprendices() as $aprendiz) {
    echo $aprendiz->getNombres(). " ". $aprendiz->getApellidos(). "<br>";
}


echo $ficha1->getAprendices()[1]->getIdAprendiz(). "<br>";

echo $ficha1->getAprendices()[2]->getIdAprendiz(). "<br>";
