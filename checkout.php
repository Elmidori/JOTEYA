<?php session_start();

require_once('connection.php');

 
 if(!(isset($_SESSION['panier']))){
    $panier=array();
  } 
  else{
    $panier=$_SESSION['panier'];
  }
  
  if(!isset($_SESSION['ROLE_USER']) ){

    echo 'Veuillez vous connecter. <a href="index.php">Acceuil.</a>';
 }
 else{
     ?>




<!DOCTYPE html>
<html>
<head>
        <title>Facture</title>
        <link rel="stylesheet" href="stylecheck.css">

</head>

<body>
    <br>
    <h1>FACTURE</h1>
    <br>
    <div class="container">
        <div class="label">
            <h4>Produit</h4>
            <h4>Prix</h4>
        </div>
    <?php
         //var_dump($panier);
            $total=0;
            for($i=0;$i<count($panier); $i++){
               $reponse=$db->query('SELECT * FROM produits WHERE REF=\'' . $panier[$i]['REF'] . '\'');
                while ($produit = $reponse->fetch()){
                    $total=$total+$produit['PRIX'];
                    ?>
                    <div class="item-c">
                      <img src="upload/<?php echo $produit['PHOTO'] ?>.png" style="height:25px;width:25px;">
                      <p>1x <?php echo $produit['Nom']; ?></p>
                      <p>      </p>
                      <p><b><?php echo $produit['PRIX']; ?> DHs</b></p>
                    </div>
                    <?php
                }

            }
           
        ?>

        <h3 >Total: <?php echo $total; ?> DHs</h3>
    </div>
</body>




</html>

<?php
}
?>