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
                    if(isset($_GET['idplatcom'])!=NULL){
                      // Contenu du formulaire D'AJOUT DE REPAS' :

                    $quantite =htmlentities($_POST['quantity']);
                    $heure =htmlentities($_POST['heure']);
                    $etat="prise en charge";
                    $supprimer=0;
                    if(isset($_SESSION['id'])) {
                      $userId=$_SESSION['id'];
                    }else{
                      $_SESSION['message'] = "Id user introuvable";
                    }
                     $idrepp =$_GET['idplatcom'];
                      if ($stmt = $mysqli->prepare("INSERT INTO commande (iduser,idrep,etat,quantite,heure,supprimer) VALUES (?, ?, ?,?,?,?)")) {
                        $stmt->bind_param("iisisi",$userId,$idrepp,$etat, $quantite,$heure,$supprimer);
                        // Le message est mis dans la session, il est préférable de séparer message normal et message d'erreur.
                        if($stmt->execute()) {
                            $_SESSION['message'] = "Commande enregistree";
                            header('Location: index_client.php');
                        } else {
                           // $_SESSION['message'] =  "Impossible de commander";
                        }
                      }
                    }
 

?>