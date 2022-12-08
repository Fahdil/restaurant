<?php
  $titre = "Page de connexion";
  include 'header.inc.php';
  include 'menu_visiteur.php';

  // Affichage des messages à l'aide de Boostrap 
// (composant alert)
if(isset($_SESSION['deconnecte'])) {
  echo '<div class="alert alert-primary" role="alert">';
  echo $_SESSION['deconnecte'];
  echo '</div>';
  unset($_SESSION['deconnecte']);
}
?>
    <h1>Connexion</h1>
  <form class="row g-2 " action="tt_connexion.php" method="post" id="form1">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" id="email1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="le_mail" placeholder="prenom.nom@groupe-esigelec.org">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" required name="le_password">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <div class="d-grid gap-2 d-md-block"><button class="btn btn-outline-primary" type="submit" id="button1">Me connecter</button></div>
  <a href="creation.php" id="inscription">S'inscrire</a>
</form>

<?php 
  include 'footer.inc.php';
?> 
