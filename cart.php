<?php 
  if(!(isset($_SESSION['panier']))){
    $panier=array();
  } 
  else{
    $panier=$_SESSION['panier'];
  }

  require_once('connection.php');
?>

<div class="cartbg" id="cartmodal">
    <div class="cart-container">
        <p id="cart-title">Shopping Cart</p>
        <span onclick="document.getElementById('cartmodal').style.display='none'"
          class="close" title="Close Modal">&times;</span>

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
                      <p><b><?php echo $produit['PRIX']; ?> DHs</b></p>
                      <a href="supprimerdupanier.php?index=<?php echo $i; ?>" class="delete">x</a>
                    </div>
                    <?php
                }

            }
           
        ?>



        <div class="cart-bottom">
            <h3>Total: <?php echo $total; ?> DHs</h3>
            <a href="checkout.php" class="buttonee">Checkout</a>
        </div>
    

    </div>
</div>



<link rel="stylesheet" href="style.css">

<script>

    var cartmodal = document.getElementById("cartmodal");
    var btn = document.getElementById("cart");

    btn.onclick = function() {
        cartmodal.style.display = "block";
    }

    window.onclick = function(event) {
  if (event.target == cartmodal) {
    cartmodal.style.display = "none";
  }
}
</script>