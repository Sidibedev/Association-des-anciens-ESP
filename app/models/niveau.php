<?php

/**
 * la classe niveau : 
 */
class niveau
{
    public $intitule;


    
    function __construct($intitule)
    {
        $this->intitule = $intitule;
    }

    /**
     * @return mixed
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * @param mixed $intitule
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;
    }




}