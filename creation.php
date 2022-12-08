<?php
  $titre = "Créer un compte";
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

    <h1  class="form2_inscription">Créer un compte</h1>
    <section class="form2_section"><marquee loop="0">	
	    <img src="https://cdn.pixabay.com/photo/2017/09/30/15/10/plate-2802332__340.jpg">
    <img src="https://cdn.pixabay.com/photo/2017/03/27/13/54/bread-2178874__340.jpg">
    <img src="https://cdn.pixabay.com/photo/2014/11/11/18/20/pasta-527286__340.jpg">
    <img src="https://cdn.pixabay.com/photo/2017/02/12/19/05/noodles-2060886__340.jpg">
    <img src="https://cdn.pixabay.com/photo/2017/12/10/14/47/pizza-3010062__340.jpg">
    <img src=" https://cdn.pixabay.com/photo/2014/04/22/02/56/pizza-329523__340.jpg">
    <img src="https://cdn.pixabay.com/photo/2018/10/04/11/37/woman-3723444__340.jpg">
    <img src=" https://cdn.pixabay.com/photo/2017/03/27/13/54/bread-2178874__340.jpg">
       </section></marquee >
    <div class="container">
      <form class="row g-2 " action="tt_creation.php" method="post" id="form2"> 
        <div class="col-md-9">
          <label for="nom" class="form-label">Nom</label>
          <input type="text" class="form-control" id="nom" required name="le_nom">
        </div>
        <div class="col-md-9">
          <label for="prenom" class="form-label">Prénom</label>
          <input type="text" class="form-control" id="prenom" required name="le_prenom">
        </div>
        <div class="col-md-9">
          <label for="mail" class="form-label">Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="l_email" placeholder="prenom.nom@groupe-esigelec.org">
        </div>
        <div class="col-md-9">
          <label for="pass" class="form-label">Password</label>
          <input type="password" class="form-control" id="pass" required name="le_pass">
        </div>
        <div class="row my-3">
      <div class="d-grid gap-2 d-md-block"><button class="btn btn-outline-primary" type="submit">S'inscrire</button></div>   
    </div>
              
      </form>
    </div>
                    
<?php 
  include 'footer.inc.php';
?> 
