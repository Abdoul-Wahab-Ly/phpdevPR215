<?php

require_once("Filliere.php");

class Inscription
{
    /* 

* Permet de modeliser les informations sur l'Inscription

*/

    private string $numInscription;
    private int $dateInscription;
    private Filliere $filliere;

    function __construct($numInscription, $dateInscription, Filliere $filliere)
    {
        $this->numInscription = $numInscription;
        $this->dateInscription = $dateInscription;
        $this->filliere = $filliere;
    }

    public function getNumInscription()
    {
        return $this->numInscription;
    }

    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    public function getFilliere()
    {
        return $this->filliere;
    }

    public function setNumInscription($numInscription)
    {
        $this->numInscription = $numInscription;
    }

    public function setDateInscription($dateInscription)
    {
        $this->dateInscription = $dateInscription;
    }

    public function setFilliere($filliere)
    {
        $this->filliere = $filliere;
    }


    function __toString()
    {
        return nl2br(" Numero Inscription     : " . $this->getNumInscription() . "</br>
                       Date d'Inscription     : " . $this->getDateInscription() . "</br>
                       Filiere                : " . $this->filliere->getNom() . "</br>
            ===============================================================<br/>");
    }
}

$filliere = new Filliere("1", "Programmation", "Programmation et developpement d'application web et mobile", 5);

$incrip = new Inscription("A5354", 2021, $filliere);

echo $incrip->__toString();
