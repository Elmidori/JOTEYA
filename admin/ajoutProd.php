<?php session_start();

require_once('../connection.php');

 if(!isset($_SESSION['ROLE_USER']) ||  $_SESSION['ROLE_USER'] != 0 ){

    header("location:../index.php");
 }
?>

<?php
    $ref=$_POST['REF'];
    $nom=$_POST['Nom'];
    $prix=$_POST['PRIX'];
    $idCat=$_POST['ID_CAT'];
    
    $folder ="../upload/"; 
    $image = $_FILES['image']['name']; 
    $path = $folder . $image ; 
    $target_file=$folder.basename($_FILES["image"]["name"]);


    $imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);
    $allowed=array('png'); $filename=$_FILES['image']['name']; 
    $ext=pathinfo($filename, PATHINFO_EXTENSION); if(!in_array($ext,$allowed) ) { 

        echo "Format PNG svp.";

    }

    else{ 

        move_uploaded_file( $_FILES['image'] ['tmp_name'], $path); 
        $image=basename($image, '.png');

        $req="INSERT INTO produits(REF,PRIX,PHOTO,NOM,ID_CAT) VALUES
        ('$ref',$prix,'$image','$nom',$idCat)";
    
        $db->exec($req);
    } 
    
header("location: gestionProd.php")

?>