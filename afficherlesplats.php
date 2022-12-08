<?php
  $titre = "Créer un compte";
  include 'header.inc.php';
  include 'menu.inc.php';

  
  if(!isset($_SESSION['authentification'])){

    header('Location: connexion.php');

    $_SESSION['message']="error d'accès";
  }
?>
  
	<body> 
        <h1 style="text-align:center">Nos plats</h1>
		<?php
		require_once("param.inc.php");
        $mysqli = new mysqli($host, $name, $passwd, $dbname);
		$mysqli->set_charset("utf8");
		$requete = "SELECT * FROM platsduresto";
		$resultat = $mysqli->query($requete);
		while ($ligne = $resultat->fetch_assoc()) {
                $compteur=0;
            ?>
                               
                         <div class="card" style="width: 18rem; margin-bottom: 2%; margin-left:2%; display:inline-block">
                        <img src="<?php echo $ligne['lien_nom']; ?>" class="card-img-top" alt="PLATS ESIG'RESTO">
                        <div class="card-body" style="background-color:black">
                            <p class="card-text" ><?php echo $ligne['description']; ?></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Nom : <?php echo $ligne['nomplat']; ?></li>
                            <li class="list-group-item">Catégorie : <?php echo $ligne['typeplat']; ?></li>
                            <li class="list-group-item">Prix : <?php echo $ligne['prix']; ?> Euro</li>
                        </ul>
                        <div class="card-body" >
                            <form action="tt_commande.php?idplatcom=<?php echo $ligne['idplat'];  ?>"  method="POST">
                        <label for="quantity" style=" color:black; display:inline-block;">Quantity :</label>
                        <input type="number" id="quantity" name="quantity" min="1" max="100" style=" color:black; display:inline-block; width:20%;">
                        <button style=" margin-left:4%; text-align:center" type="submit" class='btn btn-warning'>Commander</button>
                            </form>
                        </div>
                        </div>
        
            <?php /*****pour afficher les menus en lots de 5 par ligne */
            
        }

		$mysqli->close();
		?>

        
                    
<?php 
  include 'footer.inc.php';
?> 




