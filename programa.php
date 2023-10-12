<?php

class Programa{
    private $codigoPrograma;
    private $nombrePrograma;

    public function __construct($codigoPrograma, $nombrePrograma){
        $this->codigoPrograma = $codigoPrograma;
        $this->nombrePrograma = $nombrePrograma;
    }
    public function getCodigoPrograma(){
        return $this->codigoPrograma;
    }
    public function getNombrePrograma(){
        return $this->nombrePrograma;
    }
}

$programa1 = new Programa("2560664B", "ADSO");

echo $programa1->getCodigoPrograma(). "<br>";

echo $programa1->getNombrePrograma(). "<br>";
