<?php
class Etudiant
{
    /* 

* Permet de modeliser les informations sur l'Etudiant

*/
    private string $matricule;
    private  int    $id;
    private  string $prenom;
    private  string $nom;

    function __construct($id, $prenom, $nom, $matricule)
    {
        $this->id = $id;
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->matricule = $matricule;
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

    public function getMatricule()
    {
        return $this->matricule;
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

    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;
    }
    // La methode toString

    public function __toString()
    {
        return nl2br("
        Matricule : $this->matricule
        Nom       : $this->nom
        Prenom    : $this->prenom
        <br> <br>");
    }
}



//Instanciation de la classe
$etudiant1 = new Etudiant(1, "Abdoul Wahab", "Ly", "SIDK009876");
// $patient1->id = 1;
// $patient1->prenom = "Abdoul Wahab";
// $patient1->nom = "Ly";
// echo $patient1->id . '<br>';
// echo $patient1->prenom . '<br>';
// echo $patient1->nom . '<br>';

// echo $etudiant1->__toString();
