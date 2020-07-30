<?php require_once("connection.php");?>

<?php session_start();?>


<!DOCTYPE html>
<html>
<head>
    <title>JOTEYA.</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body> 
    
    <div id="main">

        <?php require("header.php");?>


        <div class="hero">
            <div class="hero-img"><img src="expo/amd-ryzen.png" alt=""></div>
            <div class="hero-overlay">
                <p>La performance a un prix imbattable avec amd ryzen desormais chez joteya.
                </p>
                <a href="#" class="buttonee">shop now !</a>
            </div>
        </div>
       


        <h2>Tous les Produits</h2>


        <?php
            $req="select * from produits";
            $reponse=$db->query($req);
        ?>

    
            <div class="products">
            
                <?php while($item=$reponse->fetch()) {
                ?>
                <div class="item">
                    <img src="upload/<?php echo($item['PHOTO'])?>.png" alt="<?php echo($item['PHOTO'])?>">
                    <h1><?php echo($item['Nom'])?></h1>
                    <p class="price"><?php echo($item['PRIX'])?> DHs</p>
                    <a href="addCart.php?REF=<?php echo($item['REF']); ?> " class="buttonee">Add to Cart</a>
                </div>

                <?php }
                    $reponse->closeCursor();
                ?>
           
             </div>

    </div>



    




    <?php  require("menu.php") ?>


    <script>
        var modal1 = document.getElementById('login');
 

        window.onclick = function(event) {
          if (event.target == modal1) {
            modal1.style.display = "none";
          }
        }

         var modal2 = document.getElementById('signup');
        window.onclick = function(event) {
          if (event.target == modal2) {
            modal2.style.display = "none";
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
