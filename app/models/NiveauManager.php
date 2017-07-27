<?php
/**
 * Created by PhpStorm.
 * User: mouhamed aly sidibe
 * Date: 16/06/2017
 * Time: 08:55
 */
require "niveau.php";
class NiveauManager{

    private $db ;

    function __construct($db)
    {
        $this->db = $db;
    }



    public function ajouter(niveau $niveau)
    {



        $q = $this->db->prepare('INSERT INTO niveau(intitule) VALUES(:intitule)');

        $q->bindValue(':intitule', $niveau->getIntitule());


        $q->execute();




    }

 public function listerniveaux(){

     $q = $this->db->query('SELECT 	intitule FROM niveau');

     while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
     {
         $niveaux[] = new niveau($donnees['intitule']);
     }

     return $niveaux;
 }

    public function modifierniveau($intitule)
    {
        # code...

    }

    public function supprimerniveau($code)
    {
        $sql = 'DELETE FROM niveau WHERE intitule="'.$code.'"';
        var_dump($sql);

        var_dump($this->db->exec($sql));
    }


    public function get($id){

        $q = $this->db->query('SELECT * FROM niveau WHERE intitule="'.$id.'"');
        $donnees = $q->fetch(PDO::FETCH_ASSOC);

        return new niveau($donnees['intitule']);



    }

    public  function modifier(niveau $niveau , $anciencode){



        $q = $this->db->prepare('UPDATE niveau SET intitule = :int  WHERE intitule="'.$anciencode.'"');



        $q->bindValue(':int', $niveau->intitule);






        $q->execute();


    }

}