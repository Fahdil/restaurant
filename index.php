<?php
  $titre = "Page d'accueil";
  include 'header.inc.php';
  include 'menu_visiteur.php';

// Affichage des messages à l'aide de Boostrap 
// (composant alert)
  if(isset($_SESSION['message'])) {
    echo '<div class="alert alert-primary" role="alert">';
    echo $_SESSION['message'];
    echo '</div>';
    unset($_SESSION['message']);
  }
?>

<h1 class="bleue"></h1>
     <div class="container">
           <div class="Aceuil_defilement">
                    <p>Tous vos mets a disposition</p> 
            </div>
         <div class="row">
              <p class="col-md-6 col-lg-6">
                 Vous avez la possibilité de choisir un menu parmi plusieurs,
                 veuillez vous connecter sur votre 
                 compte afin de passer votre commande.
              </p>
          </div>
     </div>
              <body> 
        <h1 style="text-align:center">Plats disponibles</h1>
		<?php
      require_once("param.inc.php");
      $mysqli = new mysqli($host, $name, $passwd, $dbname);
		$mysqli->set_charset("utf8");
		$requete = "SELECT * FROM platsduresto WhERE supprimer=0 ";
		$resultat = $mysqli->query($requete);
		while ($ligne = $resultat->fetch_assoc()) {
            ?>
                               
                         <div class="card" style="width: 18rem; margin-bottom: 2%; margin-left: 6%; display:inline-block">
                        <img src="<?php echo $ligne['lien_nom']; ?>" class="card-img-top" alt="PLATS ESIG'RESTO">
                        <div class="card-body">
                                 <p class="card-text" style="color:black"> <?php echo $ligne['description']; ?> </p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"> Nom : <?php echo $ligne['nomplat']; ?></li>
                            <li class="list-group-item">Type : <?php echo $ligne['typeplat']; ?></li>
                            <li class="list-group-item">Prix : <?php echo number_format($ligne['prix'],2,',',' '); ?></li>
                        </ul>
                          </div>
                                   
              <?php 
        }

		$mysqli->close();
		?>
     <?php 
  include 'footer.inc.php';
?> 