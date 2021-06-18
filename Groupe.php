<?php


class Groupe
{
    /* 

* Permet de modeliser les informations sur un Groupe

*/
    public string $id;
    public string $nomGroupe;
    public int $nombreEtudiant;

    function __construct($id, $nomGroupe, $nombreEtudiant)
    {
        $this->id = $id;
        $this->nomGroupe = $nomGroupe;
        $this->nombreEtudiant = $nombreEtudiant;
    }

    // pour les methodes get
    public function getid()
    {
        return $this->id;
    }

    public function getNomGroupe()
    {
        return $this->nomGroupe;
    }

    public function getNombreEtudiant()
    {
        return $this->nombreEtudiant;
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

    public function setNombreEtudiant($nombreEtudiant)
    {
        $this->nombreEtudiant = $nombreEtudiant;
    }

    public function __toString()
    {
        return nl2br("
        ID                 : $this->id
        Nom du Groupe      : $this->nomGroupe
        Nombre d'Etudiants : $this->nombreEtudiant
        <br> <br>");
    }
}

$group1 = new Groupe("1", "PR215", 20);

echo $group1->__toString();
