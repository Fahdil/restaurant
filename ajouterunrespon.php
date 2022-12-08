<?php
  $titre = "Créer un compte";
  include 'header.inc.php';
  include 'menu_responsable.php';

// authentification  
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
    <h1  class="form2_inscription">Nouveau responsable</h1>
    <section class="page_ajouter_cuisto">
      <p>les meilleurs cuisto a votre disposition</p>
       </section>
    <div class="container">
      <form class="row g-2 " action="tt_creation_responsable.php" method="post" id="form2"> 
        <div class="col-md-9">
          <label for="nom" class="form-label">Nom du responsable </label>
          <input type="text" class="form-control" id="nom" required name="le_nomRESPO">
        </div>
        <div class="col-md-9">
          <label for="prenom" class="form-label">Prénom du responsable</label>
          <input type="text" class="form-control" id="prenom" required name="le_prenomRESPO">
        </div>
        <div class="col-md-9">
          <label for="mail" class="form-label">Email du responsable</label>
          <input type="email" class="form-control" id="mail" required name="l_emailRESPO" placeholder="prenom.nom@groupe-esigelec.org">
        </div>
        <div class="col-md-9">
          <label for="pass" class="form-label">Password du responsable</label>
          <input type="password" class="form-control" id="pass" required name="le_passRESPO">
        </div>
        <div class="row my-3">
      <div class="d-grid gap-2 d-md-block"><button class="btn btn-outline-primary" type="submit">Ajouter un responsable</button></div>   
    </div>
              
      </form>
    </div>
                    
<?php 
  include 'footer.inc.php';
?> 
