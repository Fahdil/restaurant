<?php
  $titre = "Page d'accueil";
  include 'header.inc.php';
  include 'menu.inc.php';
  
  
  if(!isset($_SESSION['authentification'])){

    header('Location: connexion.php');

    $_SESSION['message']="error d'accès";
  }
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
         <div class="row">        
              <body> 
        <h1 style="text-align:center">Mes commandes</h1>
        </div>
        </div>

                      <H3 style="color:yellow; text-align:center">Toute commande en préparation ou prete ne peut plus etre annulée</H3>  

		<?php
      require_once("param.inc.php");
      $mysqli = new mysqli($host, $name, $passwd, $dbname);
 		//$mysqli->set_charset("utf8");
        if(isset($_SESSION['id'])){
            $Userid=$_SESSION['id'];
		$requete = "SELECT * FROM commande WHERE iduser=$Userid AND supprimer=0";
		$resultat = $mysqli->query($requete);
    $Total=0;
    $prix=0;
		while ($ligne = $resultat->fetch_assoc()) {
      
            ?>
                               
                         <div class="card" style="width: 18rem; margin-bottom: 2%; margin-left: 6%; display:inline-block">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"> Nom : <?php
                            $Repasid=$ligne['idrep'];
                            $resultat1 = $mysqli->query("SELECT * FROM platsduresto WHERE idplat=$Repasid");
                            $ligne1 = $resultat1->fetch_assoc();
                            $prix=$ligne1['prix'];
                            echo $ligne1['nomplat'];
                             ?></li>
                            <li class="list-group-item">Quantite : <?php echo $ligne['quantite']; ?></li>
                            <li class="list-group-item">Prix : <?php echo $prix ; ?>€</li>
                            <li class="list-group-item">Etat : <?php
                             echo $ligne['Etat'];
                             ?></li>
                              <li class="list-group-item">Heure retrait : <?php echo $ligne['heure']; ?></li>
                        </ul>
                        <div class="card-body"> 
                        <a href="tt_validation.php?idcomanul=<?php echo $ligne['idcom'];  ?>" class='btn btn-danger'>Annuler</a>
                        </div>
                          </div>
                                   
              <?php 
                              $Total= $Total+$prix*$ligne['quantite'];
        }

		$mysqli->close();
    }else{
        $_SESSION['message']="Id user introuvable";
    }
		?>
    <h1 style="text-align:right; weight:400; margin-right:15%;"> TOTAL :<?php echo $Total; ?>€  </h1>
  
         <?php 
  include 'footer.inc.php';
?> 