<?php

require_once "Filliere.php";
require_once "Etudiant.php";

class Badge
{
    /* 

* Permet de modeliser les informations sur un Badge

*/

    private int $id;
    private Filliere $filliere;
    private Etudiant $etudiant;

    public function __construct($id, Filliere $filliere, Etudiant $etudiant)
    {
        $this->id = $id;
        $this->filliere = $filliere;
        $this->etudiant = $etudiant;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getFilliere()
    {
        return $this->filliere;
    }

    public function getEtudiant()
    {
        return $this->etudiant;
    }


    public function setId($id)
    {
        $this->id = $id;
    }

    public function setFilliere($filliere)
    {
        $this->filliere = $filliere;
    }

    function __toString()
    {
        return nl2br(" ID               : " . $this->getId() . "</br>
                       Prenom Etudiant  : " . $this->etudiant->getPrenom() . "</br>
                       Nom Etudiant     : " . $this->etudiant->getNom() . "</br>
                       Nom Etudiant     : " . $this->etudiant->getMatricule() . "</br>
                       Filiere          : " . $this->filliere->getNom() . "</br>
            ===============================================================<br/>");
    }
}

// Objet Badge
$filliere = new Filliere("1", "Programmation", "Programmation et developpement d'application web et mobile", 5);
$etudiant1 = new Etudiant(1, "Abdoul Wahab", "Ly", "SIDK009876");
$badge1 = new Badge(1, $filliere, $etudiant1);
// $badge1->numInscription = "L2PR265";
// $badge1->matricule = "SIDK5358";
// $badge1->filliere = "Programmation";
// $badge1->groupe = "PR215";
// $badge1->anneeAcademique = "2020-2021";
// $badge1->prenom = "Abdoul Wahab";
// $badge1->nom = "Ly";

echo $badge1->__toString();

// echo "$badge1->prenom <br>";
// echo "$badge1->nom <br>";
// echo "$badge1->filliere <br>";
// echo "$badge1->matricule <br>";
// echo "$badge1->numInscription <br>";
// echo "$badge1->groupe <br>";
// echo "$badge1->anneeAcademique <br>";
