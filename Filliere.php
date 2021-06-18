<?php

use Filliere as GlobalFilliere;

class Filliere
{
    /* 

* Permet de modeliser les informations sur une Filliere

*/
    private string $id;
    private string $nomFilliere;
    private string $description;
    private int $nombreAnnee;
    private static int $nombreFilliereCreer = 0;


    public function __construct($id, $nomFilliere, $description, $nombreAnnee)
    {
        $this->id = $id;
        $this->nomFilliere = $nomFilliere;
        $this->description = $description;
        $this->nombreAnnee = $nombreAnnee;
        self::$nombreFilliereCreer++;
    }

    // Recuperation de l'id
    public  function getId()
    {

        return $this->id;
    }

    //Pour les gets

    // Recuperation du nom filliere
    public function getNom()
    {

        return $this->nomFilliere;
    }

    // Recuperation description
    public function getDescription()
    {

        return $this->description;
    }

    function getNombreAnnee()
    {

        return $this->nombreAnnee;
    }


    //C'est pour les set

    function setId($id)
    {

        $this->id = $id;
    }


    public function setNom($nom)
    {

        $this->nomFilliere = $nom;
    }

    function setDescription($description)
    {

        $this->description = $description;
    }

    function setNombreAnnee($nombreAnnee)
    {

        $this->nombreAnnee = $nombreAnnee;
    }

    public static function getNombreFilliereCreer()
    {

        return self::$nombreFilliereCreer;
    }


    public function __toString()
    {
        return nl2br("ID             : $this->id
        Nom Filliere   : $this->nomFilliere
        Description    : $this->description
        Nombre d'Annee : $this->nombreAnnee<br> <br>");
    }
}

$filliere = new GlobalFilliere("1", "Programmation", "Programmation et developpement d'application web et mobile", 5);
echo "Nombre de filliere creer " . Filliere::getNombreFilliereCreer() . '<br>';
echo $filliere->__toString();
$filliere->setId("500");
echo "Nombre de filliere creer " . Filliere::getNombreFilliereCreer() . '<br>';
echo $filliere->__toString();
