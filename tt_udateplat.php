<?php

  if(isset($_GET['idplatmod'])){
    update($_GET['idplatmod']);
  }

?>
<?php
  session_start(); // Pour les massages
//supprimer un repas

  function  update($idplat){
    require_once("param.inc.php");
    $mysqli = new mysqli($host, $name, $passwd, $dbname);   

    if(htmlentities($_POST['le_nomRepa1'])!=NULL){
        // Contenu du formulaire D'AJOUT DE REPAS' :
      $nomrepas =  htmlentities($_POST['le_nomRepa1']);
      $typerepas = htmlentities($_POST['le_typeRepa1']);
     //echo  $nomrepas;
      $liennomrepas =  htmlentities($_POST['lienRpa1']);
      $prixrepas = htmlentities($_POST['le_prixrepa1']);
      $descriptionrepas =htmlentities($_POST['le_description1']); 
      if ($stmt = $mysqli-> prepare("UPDATE `platsduresto` SET nomplat ='$nomrepas', description = '$descriptionrepas', typeplat = '$typerepas', lien_nom = '$liennomrepas', prix = '$prixrepas' WHERE idplat ='$idplat'")) {
          // Le message est mis dans la session, il est préférable de séparer message normal et message! d'erreur.
         
          if($stmt->execute()) {
              $_SESSION['message'] = "modification effectuée";
          } else {
              $_SESSION['message'] =  "Impossible de modifier";
          }

        }

     }
     header('Location: afficheplatdesrespo.php');
 
  } 

   
  ?>
