<?php
    session_start();

    if(!(isset($_SESSION['panier']))){
        $panier=array();
    } 
    else{
        $panier=$_SESSION['panier'];
    }
    $index=count($panier);
    $panier[$index]['REF']=$_GET['REF'];


    $_SESSION['panier']=$panier;

    header("location:index.php?panier=1");
?>