<?php
/**
 * Created by PhpStorm.
 * User: mouhamed aly sidibe
 * Date: 16/07/2017
 * Time: 13:51
 */


// ajout formation


$db = new PDO('mysql:host=localhost;dbname=association', 'root', '');
include(dirname(__FILE__)."/../models/FormationManager.php");
$formationmanager = new FormationManager($db);
// REcuperattion des formations
$formations = $formationmanager->lister();

// ajout d'une formation
if(isset($_POST['ajouterformation']) ){

    $code = $_POST['codeformation'];
    $libelle = $_POST['libelle'];
    $departement = $_POST['departement'];
    $niveau = $_POST['niveau'];

    $formation = new formation($code, $libelle, $departement, $niveau);



    $formationmanager->ajouter($formation);

    header("location: ../../public/views/ajoutformation.php?success=true", true, 301);
    exit;

}else if(isset($_GET['code'])){

    $code = $_GET['code'];



    $formationmanager->supprimer($code);







 header("location:../../index.php?action=listerformation", true, 301);
   exit;
}else if(isset($_GET['modifier'])){

    $codeformation = $_GET['modifier'];

    $formationtoupdate = $formationmanager->get($codeformation);


    header("location: ../../public/views/ajoutformation.php?update=true&formationcode=".$formationtoupdate->code."&formationlib=".$formationtoupdate->libelle."&formationdep=".$formationtoupdate->departement."&formationniv=".$formationtoupdate->niveau, true, 301);
    exit;


}else if (isset($_POST['modifierformation'])){

    $ncode = $_POST['ncodeformation'];
    $nlibelle = $_POST['nlibelle'];
    $ndepartement = $_POST['ndepartement'];
    $nniveau = $_POST['nniveau'];
    $anciencode = $_POST['anciencode'];

    $nformation = new Formation($ncode, $nlibelle, $ndepartement, $nniveau);



   $formationmanager->modifier($nformation ,$anciencode);

   header("location: ../../index.php?action=listerformation", true, 301);
    exit;




}