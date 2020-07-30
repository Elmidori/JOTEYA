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
        $req="select * from categories";
        $reponse=$db->query($req);
    ?>
    <div class="main">
        <h2>Categories</h2>
        <?php while($cat=$reponse->fetch()) {
                ?>

        <div class="item">
            <p><?php echo $cat['ID_CAT']; ?></p>
            <p><?php echo $cat['NOM']; ?></p>

            <a href="deleteCat.php?idCat=<?php echo($cat['ID_CAT']); ?>" class="delete">X</a>
        </div>
        <?php }?>

        <h2>Ajouter Categorie</h2>
            <form action="ajoutCat.php" method="POST" enctype="multipart/form-data">
                <input type="text" placeholder="Categorie" name="categorie">
                <input type="submit" value="Ajouter" >
            </form>
    </div>

</body> 
    

</html>


