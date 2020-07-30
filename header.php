<?php 
  if(!(isset($_SESSION['panier']))){
    $panier=array();
  } 
  else{
    $panier=$_SESSION['panier'];
  }
?>
       
       
       
       
       <div id="nav">
            <div class="nav-left">
                <img src="expo/open-menu.svg" alt="open menu" style="width: 34px;cursor: pointer;margin: 10px;" onclick="openNav()">
                <div id="searchbar"><input type="text" placeholder="Rechercher un produit.."></div>
            </div>
            <div class="nav-center">
                <a id="logo" href="index.php"><img src="expo/JOTEYA..png" alt="Logo"></a>
            </div>
            <div class="nav-right">
                <div class="cart" id="cart" >
                     <p><?php echo count($panier);?></p>
                    <img src="expo/shopping-cart.svg" alt="cart">
                </div>

                    <?php if(isset($_SESSION['ROLE_USER'])){ ?>
                       <p> Bonjour : <?php echo($_SESSION['LOGIN']);?> | 
                        <a href="logout.php">Logout</a></p>
                    <?php } else{ ?>

                        <a href="#" onclick="document.getElementById('login').style.display='block'">Log In</a>
                         <a href="#" class="buttonee" onclick="document.getElementById('signup').style.display='block'">Sign Up</a>
                    <?php }?>
            </div>
        </div>


        <!--cart-->
        <?php 
            require('cart.php');
        ?>


        <!-- login -->

    <div id="login" class="modal">
         <span onclick="document.getElementById('login').style.display='none'"
          class="close" title="Close Modal">&times;</span>


          <form class="modal-content animate" method="post" action="authentifier.php">
    

                <div class="container">
                    <h1>Log in</h1>
                    <input type="text" placeholder="Username" name="uname" required>
                    <br>
                    <input type="password" placeholder="Password" name="psw" required>
                    <br>
                    
                   <br>
                   <span class="psw"><a href="#">Forgot password?</a></span>
                   <br>
                   <button class="buttonee" type="submit" style="font-size:20px;padding:10px 50px; border: none;">Login</button>
                </div>
          </form>
    </div>



    <div id="signup" class="modal">
        <span onclick="document.getElementById('signup').style.display='none'"
         class="close" title="Close Modal">&times;</span>


         <form class="modal-content animate" method="post" action="inscription.php">
   

               <div class="container">
                   <h1>Sign up</h1>
                   <input type="text" placeholder="Username" name="uname" required>
                   <br>
                   <input type="password" placeholder="Password" name="psw" required>
                   <br>
                   
                  <br>
                  <br>
                  <button class="buttonee" type="submit" style="font-size:20px;padding:10px 50px; border: none;">Sign Up</button>
               </div>
         </form>
   </div>
