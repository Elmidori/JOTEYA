<?php session_start();

require_once('../connection.php');

 if(!isset($_SESSION['ROLE_USER']) ||  $_SESSION['ROLE_USER'] != 0 ){

    header("location:../index.php");
 }
 
 $req = $db->prepare('DELETE FROM categories WHERE ID_CAT = :ID_CAT');

 $req->execute(array(
     'ID_CAT' => $_GET['idCat']
     ));



header("location: gestionCAT.php")

?>