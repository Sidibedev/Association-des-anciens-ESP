<?php





$action = $_GET['action'];


If (isset($action) ) {

    switch ($action) {


        case 'ajouterformation' :  header("location:public/views/ajoutformation.php");;
            break;
        case 'ajouterdepartement' :  header("location:public/views/ajoutdepartement.php");;
            break;
        case 'ajouterniveau' : header("location:public/views/ajoutniveaux.php");
            break;
        case 'listerformation' : header("location:public/views/listeformations.php");
            break;
        case 'listerdepartement' : header("location:public/views/listedepartements.php");
            break;
        case 'listerniveaux' : header("location:public/views/listeniveaux.php");
            break;
    }






}else {

   header("location:public/views/index.php");
}