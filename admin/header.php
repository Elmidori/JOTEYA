<div id="nav">
            <div class="nav-right">
                <h3>ADMIN DASHBOARD</h2>
            </div>

            <div class="nav-center">
                <a id="logo" href="../index.php"><img src="../expo/JOTEYA..png" alt="Logo"></a>
            </div>

                   
            <p> Bonjour : <?php echo($_SESSION['LOGIN']);?> | 
             <a href="../logout.php">Logout</a></p>
                                           
    </div>  
    

        <div class="sidemenu">
            <a href="admin.php">Statistiques</a>
            <a href="gestionCat.php">Gestion Categories</a>
            <a href="gestionProd.php">Gestion Produits</a>
        </div>