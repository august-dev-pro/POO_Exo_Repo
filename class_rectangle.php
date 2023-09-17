<?php
require_once 'Class_form.php';

    class Rectangle extends Forme{

        public $Longueur;
        public $largeur;

        public function __construct($Longueur, $largeur){
            $this->Longueur = $Longueur;
            $this->largeur = $largeur;
        }

        public function calculerAir(){
            return $this->Longueur * $this->largeur;
        }

        public function calculerPerimettre(){
            return 2 * ($this->Longueur + $this->largeur);
        }
    }
$monRectangle = new Rectangle(2, 3);

$airDuRectancle = $monRectangle->calculerAir();
$perimetreDuRectangle = $monRectangle->calculerPerimettre();

?>