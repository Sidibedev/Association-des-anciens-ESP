<?php

/**
 * la classe department : 
 */
class departement
{
    public $codedepartement; // DGI
    public $nom;


    
    function __construct($codedepartement , $nom)
    {
        $this->codedepartement = $codedepartement;
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getCodedepartement()
    {
        return $this->codedepartement;
    }

    /**
     * @param mixed $codedepartement
     */
    public function setCodedepartement($codedepartement)
    {
        $this->codedepartement = $codedepartement;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }


}