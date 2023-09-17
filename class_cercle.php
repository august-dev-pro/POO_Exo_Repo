<?php
require_once 'Class_form.php';

class Cercle extends Forme{

    public $pi;
    public $rayon;

    public function __construct($pi, $rayon){
        $this->pi = $pi;
        $this->rayon = $rayon;
    }

    public function calculerAir(){
        return $this->pi * ($this->rayon * $this->rayon);
    }

    public function calculerPerimettre(){
        return 2 * $this->pi * $this->rayon;
    }

}
$monCercle = new Cercle(2, 3);

$airDuCercle = $monCercle->calculerAir();
$perimetreDuCercle = $monCercle->calculerPerimettre();

echo "l'Air de mon cercle est: $airDuCercle et son perimetre est: $perimetreDuCercle";
?>