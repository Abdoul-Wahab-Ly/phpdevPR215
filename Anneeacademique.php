<?php

class Anneeacademique
{
    /**
     * 
     */

    public $id;
    public $designation;

    public function __construct($id = null, $designation = null)
    {
        $this->id = $id;
        $this->designation = $designation;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getDesignation()
    {
        return $this->designation;
    }



    public function setId($id)
    {
        $this->id = $id;
    }

    public function setDesignation($designation)
    {
        $this->designation = $designation;
    }

    public function __toString()
    {
        return nl2br(
            "Annnee Academique : $this->designation"
        );
    }
}
