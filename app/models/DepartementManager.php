<?php
/**
 * Created by PhpStorm.
 * User: mouhamed aly sidibe
 * Date: 16/06/2017
 * Time: 08:56
 */

require "departement.php";

class DepartementManager {

    private $db ;

    function __construct($db)
    {
        $this->db = $db;
    }



    public function ajouter(departement $departement)
    {



        $q = $this->db->prepare('INSERT INTO departement(codedepartement , nomdepartement) VALUES(:code , :nomdepartement)');

        $q->bindValue(':code', $departement->getCodedepartement());
        $q->bindValue(':nomdepartement', $departement->getNom());




        $q->execute();




    }

    public  function modifier(departement $departement , $anciencode){



        $q = $this->db->prepare('UPDATE departement SET codedepartement = :code , nomdepartement = :nom  WHERE codedepartement="'.$anciencode.'"');



        $q->bindValue(':code', $departement->codedepartement);
        $q->bindValue(':nom', $departement->nom);





        $q->execute();


    }

    public function listerdepartement (){


        $q = $this->db->query('SELECT codedepartement , nomdepartement FROM departement');

        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            $departements[] = new departement($donnees['codedepartement'] , $donnees['nomdepartement']);
        }

        return $departements;




    }

    public function supprimer($code){

        $sql = 'DELETE FROM departement WHERE codedepartement="'.$code.'"';
        var_dump($sql);

        var_dump($this->db->exec($sql));


    }


    public function get($id){

        $q = $this->db->query('SELECT * FROM departement WHERE codedepartement="'.$id.'"');
        $donnees = $q->fetch(PDO::FETCH_ASSOC);

        return new departement($donnees['codedepartement'] ,$donnees['nomdepartement']);



    }



} 