<?php require_once("connection.php")?>
<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <title>JOTEYA.</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body> 
    
    <div id="main">
    
        <div id="whitespace" style="height:15vh;"></div>
        <?php require("header.php")?>
        <?php
            $req="select * from produits";
            $reponse=$db->query($req);
        ?>

        <div class="products">

            <?php while($item=$reponse->fetch()) {
                if($item['ID_CAT']==$_GET['idCat']){
            ?>
            <div class="item">
                <img src="upload/<?php echo($item['PHOTO'])?>.png" alt="<?php echo($item['PHOTO'])?>">
                <h1><?php echo($item['Nom'])?></h1>
                <p class="price"><?php echo($item['PRIX'])?> DHs</p>
                <a href="addCart.php?REF=<?php echo ($item['REF']);?>" class="buttonee">Add to Cart</a>
            </div>

            <?php }

            }
             $reponse->closeCursor();
             ?>
            
        </div>


        
                
    </div>







<?php  require("menu.php") ?>


<script>
    var modal = document.getElementById('login');
    var modal = document.getElementById('signup');
    
    
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }

    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }

    function openNav() {
      document.getElementById("sidenav").style.width = "250px";
      document.getElementById("main").style.marginLeft = "250px";
    }
    
    function closeNav() {
      document.getElementById("sidenav").style.width = "0";
      document.getElementById("main").style.marginLeft= "0";
    }
</script>

</body>
</html> 
