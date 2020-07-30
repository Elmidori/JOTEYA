
<?php require_once("connection.php")?>

<?php
    $req="select * from CATEGORIES";
    $reponse=$db->query($req);
?>


    
    
    <div id="sidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
       


        <?php while($cat=$reponse->fetch()){ 
            ?>

        <a href="produits.php?idCat=<?php echo($cat['ID_CAT'])?>">

            <?php echo($cat['NOM']);?>
                
        </a>

        <?php 
            } 
                $reponse->closeCursor();
        ?>



        <?php if(isset($_SESSION['ROLE_USER']) &&  $_SESSION['ROLE_USER'] == 0 ){ ?>
            <br><br><br><br>
            <a href="admin/admin.php">Admin dashboard</a>
        <?php }?>


            
    </div>
   