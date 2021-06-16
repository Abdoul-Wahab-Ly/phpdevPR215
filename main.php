<?php
class Patient
{
    public $id;
    public $prenom;
    public $nom;

    function __construct($id, $prenom, $nom)
    {
        $this->id = $id;
        $this->prenom = $prenom;
        $this->nom = $nom;
    }
}

class Badge
{
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
}

class Filliere
{

    public string $id;
    public string $nomFilliere;
    public int $nombreAnnee;

    function __construct($id, $nomFilliere, $nombreAnnee)
    {
        $this->id = $id;
        $this->nomFilliere = $nomFilliere;
        $this->nomFilliere = $nombreAnnee;
    }
}


class Groupe
{

    public string $id;
    public string $nomGroupe;

    function __construct($id, $nomGroupe)
    {
        $this->id = $id;
        $this->nomGroupe = $nomGroupe;
    }
}

//Instanciation de la classe

$patient1 = new Patient(1, "Abdoul Wahab", "Ly");
// $patient1->id = 1;
// $patient1->prenom = "Abdoul Wahab";
// $patient1->nom = "Ly";
echo $patient1->id . '<br>';
echo $patient1->prenom . '<br>';
echo $patient1->nom . '<br>';

echo "<br> <br>";

// Objet Badge
$badge1 = new Badge("L2PR265", "Programmation", "PR215", "SIDK5358", "2020-2021", "Abdoul Wahab", "Ly");
// $badge1->numInscription = "L2PR265";
// $badge1->matricule = "SIDK5358";
// $badge1->filliere = "Programmation";
// $badge1->groupe = "PR215";
// $badge1->anneeAcademique = "2020-2021";
// $badge1->prenom = "Abdoul Wahab";
// $badge1->nom = "Ly";

echo "$badge1->prenom <br>";
echo "$badge1->nom <br>";
echo "$badge1->filliere <br>";
echo "$badge1->matricule <br>";
echo "$badge1->numInscription <br>";
echo "$badge1->groupe <br>";
echo "$badge1->anneeAcademique <br>";
