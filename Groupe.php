<?php
require_once("Filliere.php");
require_once("Anneeacademique.php");

class Groupe
{
    /* 

* Permet de modeliser les informations sur un Groupe

*/
    public string $id;
    public string $nomGroupe;
    public string $niveauEtude;
    private Filliere $filliere;
    private Anneeacademique $anneeacademique;


    function __construct($id, $nomGroupe, $niveauEtude, Filliere $filliere, Anneeacademique $anneeacademique)
    {
        $this->id = $id;
        $this->nomGroupe = $nomGroupe;
        $this->niveauEtude = $niveauEtude;
        $this->filliere = $filliere;
        $this->anneeacademique = $anneeacademique;
    }

    // pour les methodes get
    public function getId()
    {
        return $this->id;
    }

    public function getNomGroupe()
    {
        return $this->nomGroupe;
    }

    public function getNiveauetude()
    {
        return $this->niveauEtude;
    }

    public function getFilliere()
    {
        return $this->filliere;
    }

    public function getAnneeacademique()
    {
        return $this->anneeacademique;
    }


    // Les methodes set

    public function setid($id)
    {
        $this->id = $id;
    }

    public function setNomGroupe($nomGroupe)
    {
        $this->nomGroupe = $nomGroupe;
    }

    public function setNiveauetude($niveauEtude)
    {
        $this->niveauEtude = $niveauEtude;
    }

    public function setFilliere(Filliere $filliere)
    {
        $this->filliere = $filliere;
    }

    public function setAnneeeacademique(Anneeacademique $anneeacademique)
    {
        $this->anneeacademique = $anneeacademique;
    }


    function __toString()
    {
        return "Nom du groupe: " . $this->getNomGroupe() . "</br>
            Niveau d'etude: " . $this->getNiveauEtude() . "</br>
            Filiere : " . $this->filliere->getNom() . "</br>
            Annee Academique: " . $this->anneeacademique->getDesignation() . "</br>
            ===============================================================<br/>";
    }
}
$filliere = new Filliere("1", "Programmation", "Programmation et developpement d'application web et mobile", 5);
$anneeacademique = new Anneeacademique("1", "2020/ 2021");

$group1 = new Groupe("1", "PR215", "licence2", $filliere, $anneeacademique);

echo $group1->__toString();
