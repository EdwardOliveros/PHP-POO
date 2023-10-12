<?php

class Aprendiz{
    private  $idAprendiz;
    private  $nombres;
    private  $apellidos;
    private  $correo;

    public function __construct(
        $idAprendiz, $nombres, $apellidos, $correo) {
    
        $this->idAprendiz = $idAprendiz;
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->correo = $correo;
    }

    //Métodos GET's
    public function getIdAprendiz() {
        return $this->idAprendiz;
    }
    public function getNombres() {
        return $this->nombres;
    }
    public function getApellidos() {
        return $this->apellidos;
    }
    public function getCorreo() {
        return $this->correo;
    }

    public function arrayAprendiz(
        $idAprendiz, $nombres, $apellidos, $correo
    ) {
        return array(
            $idAprendiz => $this->idAprendiz,
            $nombres => $this->nombres,
            $apellidos => $this->apellidos,
            $correo => $this->correo
        );
    }

}

$aprendiz1 = new Aprendiz("1", "Luis", "Lopez", "luisLop@gmail.com");
$aprendiz2 = new Aprendiz("2", "Martin", "Gomez", "MarMez@gmail.com");
$aprendiz3 = new Aprendiz("3", "Gaston" , "Asan", "Gan@gmail.com");
$aprendiz4 = new Aprendiz("4", "Lucas" , "Ford", "Ford123@gmail.com");
$aprendiz5 = new Aprendiz("5", "Maria" , "Ramirez", "Marez22@gmail.com");

$aprendiz6 = new Aprendiz("6", "Victor", "Oliveros", "VO@gmail.com");
$aprendiz7 = new Aprendiz("7", "Benito", "Martinez", "BM@gmail.com");
$aprendiz8 = new Aprendiz("8", "Anton" , "Soler", "AS@gmail.com");
$aprendiz9 = new Aprendiz("9", "Marcos" , "Duque", "MD@gmail.com");
$aprendiz10 = new Aprendiz("1", "Hector" , "Padilla", "HP@gmail.com");

$aprendiz11 = new Aprendiz("11", "Sara", "Delgado", "SD@gmail.com");
$aprendiz12 = new Aprendiz("12", "Natalia", "Abril", "NA@gmail.com");
$aprendiz13 = new Aprendiz("13", "Carolina" , "Vásquez", "CV@gmail.com");
$aprendiz14 = new Aprendiz("14", "Mario" , "Platino", "MP@gmail.com");
$aprendiz15 = new Aprendiz("15", "Sofia" , "Acevedo", "SA@gmail.com");

echo '<pre>';

echo $aprendiz1->getIdAprendiz(). '<br>';

echo $aprendiz1->getNombres(). '<br>';

echo $aprendiz1->getApellidos(). '<br>';

echo $aprendiz1->getCorreo(). '<br>';

echo $aprendiz1->arrayAprendiz(
    $aprendiz1->getIdAprendiz(),
    $aprendiz1->getNombres(),
    $aprendiz1->getApellidos(),
    $aprendiz1->getCorreo()
    ). '<br>';

echo '</pre>';



