<?php
/**
 * Created by PhpStorm.
 * User: Harry van der Valk @ HVSoftware
 * Date: 2-4-14
 * Time: 18:08
 */

class Eitje {
    public $kleur;
    public $eetbaar;
    public $lekker;
    public $soort;
    protected $maker;
    private $kosten;

    public function setKosten($value) {
        if ($value < 0) {
            $value = 0;
        }
        $this->kosten = $value;
    }

    public function getKosten() {
        return $this->kosten;
    }

    public function isLekker() {
      return ($this->lekker ? 'Ja, lekker' : "Nee, vies");
    }
}


$ei = new Eitje();
$ei->eetbaar = true;
$ei->kleur = "rood";
$ei->lekker = false;
$ei->setKosten(-200);

$ei1 = new Eitje();
$ei1->eetbaar = false;
$ei1->kleur = "oranje";
$ei1->lekker = false;
$ei1->eetbaar = true;

$ei2 = new Eitje();
$ei2->eetbaar = true;
$ei2->kleur = "rood";
$ei2->lekker = false;

echo "Lekker:". $ei->isLekker() . "<br>";
echo "Kleur:". $ei->kleur . "<br>";
echo "Kosten:". $ei->getKosten();

