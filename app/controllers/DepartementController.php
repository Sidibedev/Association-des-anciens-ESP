<?php
/**
 * Created by PhpStorm.
 * User: mouhamed aly sidibe
 * Date: 16/07/2017
 * Time: 12:41
 */



$db = new PDO('mysql:host=localhost;dbname=association', 'root', '');
include(dirname(__FILE__)."/../models/DepartementManager.php");
$depmanag = new DepartementManager($db);

$departements = $depmanag->listerdepartement();

//

if(isset($_POST['ajouterdepartement'])) {

    $code = $_POST['codedepartement'];
    $nomdepartement = $_POST['nomdepartement'];



    $depart  = new departement($code , $nomdepartement);

    $departementmanager  = new DepartementManager($db);
    $departementmanager->ajouter($depart);

    header("location: ../../public/views/ajoutdepartement.php?success=true", true, 301);
    exit;

}


if(isset($_GET['code'])){

    $code = $_GET['code'];


    $depmanag->supprimer($code);




    header("location: ../../index.php?action=listerdepartement", true, 301);
    exit;



}

if(isset($_GET['modifier'])) {

    $codedep = $_GET['modifier'];

    $deptoupdate = $depmanag->get($codedep);


    header("location: ../../public/views/ajoutdepartement.php?update=true&depcode=" . $deptoupdate->codedepartement . "&depnom=" . $deptoupdate->nom , true, 301);
    exit;

}

if (isset($_POST['modifierdepartement'])){

    $ncode = $_POST['ncodedepartement'];
    $nnom = $_POST['nnomdepartement'];
    $anciencode = $_POST['anciencode'];


    $ndep = new departement($ncode, $nnom);

    $depmanag->modifier($ndep , $anciencode);




    header("location: ../../index.php?action=listerdepartement", true, 301);
    exit;




}
