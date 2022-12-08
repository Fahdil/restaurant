<?php
  $titre = "Créer un compte";
  include 'header.inc.php';
  include 'menu_responsable.php';

  
  if(!isset($_SESSION['authentification'])){

    header('Location: connexion.php');

    $_SESSION['message']="error d'accès";
  }

?>
    <h1  class="form2_inscription">Nouveau repas</h1>
    <div class="container">
      <form class="row g-2 " action="tt_repas.php" method="post" id="form2"> 
        <div class="col-md-9">
          <label for="nom" class="form-label">Nom du plat </label>
          <input type="text" class="form-control" id="nom" required name="le_nomRepa">
        </div>
        <div class="col-md-9">
          <label for="prenom" class="form-label">Type de plat</label>
          <input type="text" class="form-control" id="prenom" required name="le_typeRepa">
        </div>
        <div class="col-md-9">
          <label for="mail" class="form-label">image</label>
          <input type="text" class="form-control" id="mail" required name="lienRpa">
        </div>
        <div class="col-md-9">
          <label for="pass" class="form-label">prix</label>
          <input type="text" class="form-control" id="pass" required name="le_prixrepa">
        </div>
        <div class="col-md-9" id="ajoutrepas">
          <label for="pass" class="form-label">Description</label>
          <input type="text" class="form-control" id="pass" required name="le_description">
        </div>
        <div class="row my-3">
      <div class="d-grid gap-2 d-md-block"><button class="btn btn-outline-primary" type="submit">Ajouter un repas</button></div>   
    </div>
              
      </form>
    </div>
                    
<?php 
  include 'footer.inc.php';
?> 