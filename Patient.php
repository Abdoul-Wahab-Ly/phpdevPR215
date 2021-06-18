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



//Instanciation de la classe
$patient1 = new Patient(1, "Abdoul Wahab", "Ly");
// $patient1->id = 1;
// $patient1->prenom = "Abdoul Wahab";
// $patient1->nom = "Ly";
echo $patient1->id . '<br>';
echo $patient1->prenom . '<br>';
echo $patient1->nom . '<br>';

echo "<br> <br>";
