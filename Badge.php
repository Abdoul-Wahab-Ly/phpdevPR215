<?php

class Badge
{
    /* 

* Permet de modeliser les informations sur un Badge

*/

    public $numInscription;
    public $filliere;
    public $groupe;
    public $matricule;
    public $anneeAcademique;
    public $prenom;
    public $nom;



    function __construct($numInscription, $filliere, $groupe, $matricule, $anneeAcademique, $prenom, $nom)
    {
        $this->numInscription = $numInscription;
        $this->filliere = $filliere;
        $this->groupe = $groupe;
        $this->matricule = $matricule;
        $this->anneeAcademique = $anneeAcademique;
        $this->prenom = $prenom;
        $this->nom = $nom;
    }


    // Pour les mrthodes de get
    public function getNumInscription()
    {
        return $this->numInscription;
    }

    public function getFilliere()
    {
        return $this->filliere;
    }

    public function getGroupe()
    {
        return $this->groupe;
    }

    public function getMatricule()
    {
        return $this->matricule;
    }

    public function getAnneeAcademique()
    {
        return $this->anneeAcademique;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getNom()
    {
        return $this->nom;
    }



    // Pour les methodes set
    public function setNumInscription($numInscription)
    {

        return $this->numInscription = $numInscription;
    }

    public function setFilliere($filliere)
    {

        return $this->filliere = $filliere;
    }

    public function setGroupe($groupe)
    {

        return $this->groupe = $groupe;
    }

    public function setMatricule($matricule)
    {

        return $this->matricule = $matricule;
    }

    public function setAnneeAcademique($anneeAcademique)
    {

        return $this->anneeAcademique = $anneeAcademique;
    }

    public function setPrenom($prenom)
    {

        return $this->prenom = $prenom;
    }

    public function setNom($nom)
    {

        return $this->nom = $nom;
    }

    // La methode toString

    public function __toString()
    {
        return nl2br("
        Nom                : $this->nom
        Prenom             : $this->prenom
        Numero Inscription : $this->numInscription
        Nom Filliere       : $this->filliere
        Groupe             : $this->groupe
        Matricule          : $this->matricule
        Annee Academique   : $this->anneeAcademique
        <br> <br>");
    }
}

// Objet Badge
$badge1 = new Badge("L2PR265", "Programmation", "PR215", "SIDK5358", "2020-2021", "Abdoul Wahab", "Ly");
// $badge1->numInscription = "L2PR265";
// $badge1->matricule = "SIDK5358";
// $badge1->filliere = "Programmation";
// $badge1->groupe = "PR215";
// $badge1->anneeAcademique = "2020-2021";
// $badge1->prenom = "Abdoul Wahab";
// $badge1->nom = "Ly";

$badge1->__toString();

// echo "$badge1->prenom <br>";
// echo "$badge1->nom <br>";
// echo "$badge1->filliere <br>";
// echo "$badge1->matricule <br>";
// echo "$badge1->numInscription <br>";
// echo "$badge1->groupe <br>";
// echo "$badge1->anneeAcademique <br>";
