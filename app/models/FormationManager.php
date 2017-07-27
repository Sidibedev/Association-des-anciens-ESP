<?php


require "formation.php";

class FormationManager {

    private  $db ;

    function __construct($db)
    {
        $this->db = $db;
    }

    //ajoute une formation dans la base
    public function ajouter (Formation $formation){

            echo $formation->departements;


        $q = $this->db->prepare('INSERT INTO formation(code, nom, departement , niveau) VALUES(:nom, :libelle ,:departement , :niveau)');

        $q->bindValue(':nom', $formation->getCode());
        $q->bindValue(':libelle', $formation->getLibelle());
        $q->bindValue(':departement', $formation->getDepartement());
        $q->bindValue(':niveau', $formation->getNiveau());


        $q->execute();


        

    }

    //modifie une formation
    public  function modifier(Formation $formation , $anciencode){

        var_dump($formation);

        $q = $this->db->prepare('UPDATE formation SET code = :code , nom = :libelle , departement = :departement , niveau = :niveau WHERE code="'.$anciencode.'"');



        $q->bindValue(':code', $formation->getCode());
        $q->bindValue(':libelle', $formation->getLibelle());
        $q->bindValue(':departement', $formation->getDepartement());
        $q->bindValue(':niveau', $formation->getNiveau());




       $q->execute();


    }

    //supprime une formation
    public function supprimer($code){

      echo $code;

        $sql = 'DELETE FROM formation WHERE code="'.$code.'"';
        var_dump($sql);

        var_dump($this->db->exec($sql));


    }

    // affiche la liste des formations
    public function lister(){


        $q = $this->db->query('SELECT code ,nom , departement , niveau FROM formation');

        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            $formations[] = new formation($donnees['code'] ,$donnees['nom'] , $donnees['departement'] ,$donnees['niveau']  );
        }

        return $formations;



    }

    //recupere une formation grace a son Id
    public function get($id){

        $q = $this->db->query('SELECT * FROM formation WHERE code="'.$id.'"');
        $donnees = $q->fetch(PDO::FETCH_ASSOC);

        return new formation($donnees['code'] ,$donnees['nom'] , $donnees['departement'] ,$donnees['niveau']  );


    }


}