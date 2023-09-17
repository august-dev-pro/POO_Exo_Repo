<?php
require_once 'Class_form.php';

class Triangle extends Forme{

    public $cote;

    public function __construct($cote){
        $this->cote = $cote;
    }

    public function calculerAir(){

    }

    public function calculerPerimettre(){
        return $this->cote * 4;
    }

}
$monTriangle = new Triangle(12);

$airDuTriangle = $monTriangle->calculerAir();
$perimetreDuCercle = $monTriangle->calculerPerimettre();

?>