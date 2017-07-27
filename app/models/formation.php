<?php

/**
 * la classe formation : code , libelle , niveau 
 */
                class Formation
                {

                    public $code;
                    public $libelle;
                    public $departement;
                    public $niveau;


                    function __construct($code, $libelle, $departement, $niveau)
                    {
                        $this->code = $code;
                        $this->libelle = $libelle;
                        $this->departement = $departement;
                        $this->niveau = $niveau;

                    }

                    /**
                     * @return mixed
                     */
                    public function getCode()
                    {
                        return $this->code;
                    }

                    /**
                     * @param mixed $code
                     */
                    public function setCode($code)
                    {
                        $this->code = $code;
                    }

                    /**
                     * @return mixed
                     */
                    public function getDepartement()
                    {
                        return $this->departement;
                    }

                    /**
                     * @param mixed $departement
                     */
                    public function setDepartement($departement)
                    {
                        $this->departement = $departement;
                    }

                    /**
                     * @return mixed
                     */
                    public function getLibelle()
                    {
                        return $this->libelle;
                    }

                    /**
                     * @param mixed $libelle
                     */
                    public function setLibelle($libelle)
                    {
                        $this->libelle = $libelle;
                    }

                    /**
                     * @return mixed
                     */
                    public function getNiveau()
                    {
                        return $this->niveau;
                    }

                    /**
                     * @param mixed $niveau
                     */
                    public function setNiveau($niveau)
                    {
                        $this->niveau = $niveau;
                    }


                }












    /* Au lieu de mettre nos methodes dans notre classe fromation on va creer une autre classe FormationManager qui va se charger
    de la gestion de notre classe :
    En POO, il y a une phrase très importante qu'il faut que vous ayez constamment en tête :
     « Une classe, un rôle. » Maintenant, répondez clairement à cette question : « Quel est le rôle d'une classe comme Formation» ?

    Un objet instanciant une classe comme Formation a pour rôle de représenter une ligne présente en BDD.
    Le verbe « représenter » est ici très important. En effet, « représenter » est très différent de « gérer ».
     Une ligne de la BDD ne peut pas s'auto-gérer !
    C'est comme si vous demandiez à un ouvrier ayant construit un produit de le commercialiser : l'ouvrier est tout à fait capable de le construire,
    c'est son rôle, mais il ne s'occupe pas du tout de sa gestion, il en est incapable.
    Il faut donc qu'une deuxième personne intervienne, un commercial, qui va s'occuper de vendre ce produit.

   Pour revenir à nos objets d'origine, nous aurons donc besoin de quelque chose qui va s'occuper de les gérer.
     Ce quelque chose, vous l'aurez peut-être deviné, n'est autre qu'un objet.
     Un objet gérant des entités issues d'une BDD est généralement appelé un « manager ».


    */

   /* public function creerformation($code , $libelle , $departement, $niveau)
    {
        

    }

   public function modifierformation($code)
    {
        # code...

    }

    public function supprimerformation($code)
    {
        # code...
    } 

    public function afficherformation($code)
    {
        # code...
    }*/






