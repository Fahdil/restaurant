<?php
  $titre = "Créer un compte";
  include 'header.inc.php';
  include 'menu_responsable.php';


  
  if(!isset($_SESSION['authentification'])){

    header('Location: connexion.php');

    $_SESSION['message']="error d'accès";
  }

?>

<?php

    require_once("param.inc.php");
   
       $indixx =$_GET['idplatmod'];
       $mysqli = new mysqli($host, $name, $passwd, $dbname);
       $mysqli->set_charset("utf8");
       $requete ="SELECT * FROM `platsduresto` WHERE `idplat` = '$indixx'";
       $resultat = $mysqli->query($requete);
        $ligne = $resultat->fetch_assoc();
  ?>

    <h1  class="form2_inscription">Modifier le pat avec les information neccessaire</h1>
    <div class="container">
      <form class="row g-2 " action="tt_udateplat.php?idplatmod=<?php if(isset($_GET['idplatmod'])){ echo $_GET['idplatmod']; }?> " method="post" id="form2"> 
        <div class="col-md-9">
          <label for="nom" class="form-label">Nom du plat </label>
          <input type="text" class="form-control" id="nom" required name="le_nomRepa1" value=" <?php echo $ligne['nomplat']; ?>">
        </div>
        <div class="col-md-9">
          <label for="prenom" class="form-label">Type de plat</label>
          <input type="text" class="form-control" id="prenom" required name="le_typeRepa1" value=" <?php echo $ligne['typeplat']; ?>">
        </div>
        <div class="col-md-9">
          <label for="mail" class="form-label">image</label>
          <input type="text" class="form-control" id="mail" required name="lienRpa1" value=" <?php echo $ligne['lien_nom']; ?>">
        </div>
        <div class="col-md-9">
          <label for="pass" class="form-label">prix</label>
          <input type="text" class="form-control" id="pass" required name="le_prixrepa1" value=" <?php echo $ligne['prix']; ?>">
        </div>
        <div class="col-md-9" id="ajoutrepas">
          <label for="pass" class="form-label">Description</label>
          <input type="text" class="form-control" id="pass" required name="le_description1" value=" <?php echo $ligne['description']; ?>">
        </div>
        <div class="row my-3">
        <div class="d-grid gap-2 d-md-block"><button class="btn btn-outline-primary" type="submit">Modifier</button></div>  
    </div>
              
      </form>
    </div>

<?php 
  include 'footer.inc.php';
?> 