<?php
/**
 * Created by PhpStorm.
 * User: mouhamed aly sidibe
 * Date: 16/07/2017
 * Time: 12:45
 */

$db = new PDO('mysql:host=localhost;dbname=association', 'root', '');
include(dirname(__FILE__)."/../models/NiveauManager.php");
$nivmanag = new NiveauManager($db);

$niveaux = $nivmanag->listerniveaux();


if(isset($_POST['ajouterniveau'])) {

    $lib = $_POST['lib'];



    $niv = new niveau($lib);

    $niveaumanager = new NiveauManager($db);
    $nivmanag->ajouter($niv);

    header("location: ../../public/views/ajoutniveaux.php?success=true", true, 301);
    exit;
}

if(isset($_GET['code'])){

    $code = $_GET['code'];



    $nivmanag->supprimerniveau($code);







    header("location:../../index.php?action=listerniveaux", true, 301);
    exit;
}

if(isset($_GET['modifier'])) {

    $nivintitule = $_GET['modifier'];

    $nivtoupdate = $nivmanag->get($nivintitule);





    header("location: ../../public/views/ajoutniveaux.php?update=true&nivintitule=" . $nivtoupdate->intitule, true, 301);
    exit;

}


if (isset($_POST['modifierniveau'])){

    $nintitule = $_POST['nlib'];

    $anciencode = $_POST['anciencode'];


   $monniveau = new niveau($nintitule);

    $nivmanag->modifier($monniveau , $anciencode);



    header("location: ../../index.php?action=listerniveaux", true, 301);
    exit;




}
