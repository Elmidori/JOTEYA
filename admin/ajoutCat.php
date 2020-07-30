<?php session_start();

require_once('../connection.php');

 if(!isset($_SESSION['ROLE_USER']) ||  $_SESSION['ROLE_USER'] != 0 ){

    header("location:../index.php");
 }
?>

<?php


    $cat=$_POST['categorie'];

    $req="INSERT INTO categories(NOM) VALUES ('$cat')";
    $db->exec($req);

    header("location:gestionCat.php");




?>  