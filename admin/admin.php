<?php session_start();

require_once('../connection.php');

 if(!isset($_SESSION['ROLE_USER']) ||  $_SESSION['ROLE_USER'] != 0 ){

    header("location:../index.php");
 }
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styleadmin.css">
    <title>Admin Dashboard</title>
</head>

<body>

    <?php 
        require_once('header.php');
    ?>


</body> 
        

</html>