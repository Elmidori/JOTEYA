<?php session_start();

require_once('../connection.php');

 if(!isset($_SESSION['ROLE_USER']) ||  $_SESSION['ROLE_USER'] != 0 ){

    header("location:../index.php");
 }
 
 $req = $db->prepare('DELETE FROM produits WHERE REF = :ref');
 
 $req->execute(array(
     'ref' => $_GET['REF']
     ));



header("location: gestionProd.php")

?>