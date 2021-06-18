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

    // Pour les methodes get

    public function getId()
    {
        return $this->id;
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

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    // La methode toString

    public function __toString()
    {
        return nl2br("
        ID      : $this->id
        Nom     : $this->nom
        Prenom  : $this->prenom
        <br> <br>");
    }
}



//Instanciation de la classe
$patient1 = new Patient(1, "Abdoul Wahab", "Ly");
// $patient1->id = 1;
// $patient1->prenom = "Abdoul Wahab";
// $patient1->nom = "Ly";
// echo $patient1->id . '<br>';
// echo $patient1->prenom . '<br>';
// echo $patient1->nom . '<br>';

echo $patient1->__toString();
