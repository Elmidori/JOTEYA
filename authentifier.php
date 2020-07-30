<?php require_once("connection.php")?>


<?php
    session_start();
    $_SESSION=array();

    $l=$_POST['uname'];
    $p=$_POST['psw'];
    $pc=md5($p);

    $req="select * from USERS where LOGIN='$l' and PASSWORD='$pc'";
    $reponse= $db->query($req) ;


    if($u=$reponse->fetch()){
        $_SESSION['ROLE_USER']=$u['LVL'];
        $_SESSION['LOGIN']=$l;
        header("location:index.php");
    }
    else{   
        echo 'identifiants errones. <a href="index.php"> Retour vers acceuil.</a>';

    }
?>