<?php
  $titre = "Créer un compte";
  include 'header.inc.php';
  include 'menu_responsable.php';

  
  if(!isset($_SESSION['authentification'])){

    header('Location: connexion.php');

    $_SESSION['message']="error d'accès";
  }
?>

           
	<body> 
        <h1 style="text-align:center">Gérer Commandes</h1>
		<?php
      require_once("param.inc.php");
      $mysqli = new mysqli($host, $name, $passwd, $dbname);
		$mysqli->set_charset("utf8");
		$requete = "SELECT * FROM commande WhERE supprimer=0";
		$resultat = $mysqli->query($requete);
		while ($ligne = $resultat->fetch_assoc()) {
            ?>
                               
                         <div class="card" style="width: 18rem; margin-bottom: 2%; margin-left: 6%; display:inline-block">
                            <ul class="list-group list-group-flush">
                            <li class="list-group-item"> Nom plat : <?php 
                            $Repasid=$ligne['idrep'];
                            $resultat1 = $mysqli->query("SELECT * FROM platsduresto WHERE idplat=$Repasid");
                            $ligne1 = $resultat1->fetch_assoc();
                            echo $ligne1['nomplat'];
                            ?></li>
                            <li class="list-group-item">Quantite : <?php echo $ligne['quantite']; ?></li>
                            <li class="list-group-item">User : <?php 
                            $Userid=$ligne['iduser'];
                            $resultat1 = $mysqli->query("SELECT * FROM bd WHERE id=$Userid");
                            $ligne1 = $resultat1->fetch_assoc();
                            echo $ligne1['email'];
                            ?></li>
                            <li class="list-group-item">Etat : <?php echo $ligne['Etat']; ?></li>
                            <li class="list-group-item">Heure retrait : <?php echo $ligne['heure']; ?></li>
                        </ul>
                        <div class="card-body"> 
                        <a style="margin-right: 24%;" href="tt_validation.php?idcommande=<?php echo $ligne['idcom'];  ?>" class='btn btn-primary'>Pret</a>      
                        <a href="tt_validation.php?idcommdEnPrepa=<?php echo $ligne['idcom'];  ?>" class='btn btn-primary'>En preparation</a>
                        </div>
                        </div>
                                   
              <?php 
        }

		$mysqli->close();
		?>
                   
<?php 
  include 'footer.inc.php';
?> 




