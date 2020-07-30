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
    <?php require_once('header.php'); 
    
        $req="select * from produits";
        $reponse=$db->query($req);
    ?> 
    
    <div class="main">
        <h2>Produits</h2>
        <div class="products">
            <?php while($item=$reponse->fetch()) {
                ?>
            <div class="item">
                    <img src="../upload/<?php echo($item['PHOTO'])?>.png" alt="<?php echo($item['PHOTO'])?>">
                    <p><?php echo($item['Nom'])?></p>
                    <p class="price"><?php echo($item['PRIX'])?> DHs</p>
                    <p>Categorie: <?php echo($item['ID_CAT']) ?></p>
                    <a href="deleteProd.php?REF=<?php echo($item['REF']); ?>" class="delete">X</a>
                </div>
            <?php }?>
        </div>

        <h2>Ajouter un produit</h2>
        <div class="ajout-prod">
            <form action="ajoutProd.php" method="POST" enctype="multipart/form-data">
                
                <div class="group1">
                    <input type="text" name="REF" placeholder="Reference">
                    <input type="text" name="Nom" placeholder="Nom">
                    <input type="text" name="PRIX" placeholder="Prix">
                    <select name="ID_CAT">

                        <?php 
                        $rsCat=$db->query('SELECT * FROM categories');

                        while($cat=$rsCat->fetch()){?>
                            <option value="<?php echo($cat['ID_CAT'])?>">
                                <?php echo($cat['NOM'])?>
                            </option>
                        <?php }?>
                    </select>
                </div>

                <input type="file" name="image"/>
                <input type="submit" value="Ajouter">

            </form>
        </div>
    </div>




</body>


</html>