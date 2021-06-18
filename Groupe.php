<?php


class Groupe
{
    /* 

* Permet de modeliser les informations sur un Groupe

*/
    public string $id;
    public string $nomGroupe;

    function __construct($id, $nomGroupe)
    {
        $this->id = $id;
        $this->nomGroupe = $nomGroupe;
    }
}
