<?php
  session_start(); // Pour les massages

  

  // Option pour bcrypt
  $options = [
        'cost' => 12,
  ];

  // Connexion :
  require_once("param.inc.php");
  $mysqli = new mysqli($host, $name, $passwd, $dbname);
  if ($mysqli->connect_error) {
      die('Erreur de connexion (' . $mysqli->connect_errno . ') '
              . $mysqli->connect_error);
  }


  ///////cette partie concerne l'ajjout d'un repas'
                    if(htmlentities($_POST['le_nomRepa'])!=NULL){
                      // Contenu du formulaire D'AJOUT DE REPAS' :
                    $nomrepas =  htmlentities($_POST['le_nomRepa']);
                    $typerepas = htmlentities($_POST['le_typeRepa']);
                    $liennomrepas =  htmlentities($_POST['lienRpa']);
                    $prixrepas = htmlentities($_POST['le_prixrepa']);
                    $supprimer=0;
                    $descriptionrepas =htmlentities($_POST['le_description']); // 0: pour l'utilisateur par défaut 1:...
                      if ($stmt = $mysqli->prepare("INSERT INTO platsduresto(nomplat, typeplat, prix, lien_nom, description, supprimer) VALUES (?, ?, ?, ?, ?, ?)")) {
                        $stmt->bind_param("ssdssi", $nomrepas, $typerepas, $prixrepas, $liennomrepas,  $descriptionrepas, $supprimer);
                        // Le message est mis dans la session, il est préférable de séparer message normal et message d'erreur.
                        if($stmt->execute()) {
                            $_SESSION['message'] = "Ajout réussi";
                        } else {
                            $_SESSION['message'] =  "Impossible d'enregistrer";
                        }
                      }
                    }
 
  // Redirection vers la page d'accueil 
  // Où le message présent dans la session sera affiché.
    header('Location: afficheplatdesrespo.php');

?>