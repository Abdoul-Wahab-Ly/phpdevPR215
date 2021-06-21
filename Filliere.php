<?php



class Filliere
{
    /* 

* Permet de modeliser les informations sur une Filliere

*/
    public string $id;
    public string $nomFilliere;
    public string $description;
    public int $nombreAnnee;
    public static int $nombreFilliereCreer = 0;


    public function __construct($id, $nomFilliere, $description)
    {
        $this->id = $id;
        $this->nomFilliere = $nomFilliere;
        $this->description = $description;
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


    public static function getNombreFilliereCreer()
    {

        return self::$nombreFilliereCreer;
    }


    public function __toString()
    {
        return nl2br("ID             : $this->id
        Nom Filliere   : $this->nomFilliere
        Description    : $this->description
       <br> <br>");
    }
}

// $filliere = new GlobalFilliere("1", "Programmation", "Programmation et developpement d'application web et mobile", 5);
// echo "Nombre de filliere creer " . Filliere::getNombreFilliereCreer() . '<br>';
// echo $filliere->__toString();
// $filliere->setId("500");
// echo "Nombre de filliere creer " . Filliere::getNombreFilliereCreer() . '<br>';
// echo $filliere->__toString();
