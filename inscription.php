<?php
    require_once("connection.php");

    $l=$_POST['uname'];
    $p=md5($_POST['psw']);


    $req = $db->prepare('INSERT INTO users(LOGIN, PASSWORD, LVL) VALUES(:LOGIN, :PASSWORD, 1 )');
    $req->execute(array(
	    'LOGIN' => $l,
    	'PASSWORD' => $p
	));

echo " \n \n \n Vous etes inscrit. Bienvenue " . $l;
?>

<a href="index.php">Retournez a l'acceuil.</a>