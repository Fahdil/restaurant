<?php
  if(isset($_GET['idcommande'])){
    validerCommande($_GET['idcommande']);
    
  }
  elseif(isset($_GET['idcommdEnPrepa'])){
    commapreparation($_GET['idcommdEnPrepa']);
    
  }
   elseif(isset($_GET['idcomanul'])){
    annulerCommande($_GET['idcomanul']);
    
  }
?>
<?php
//supprimer un repas
  function  validerCommande($idcommande){
    require_once("param.inc.php");

  

/*$dt = new \DateTime();
$dt->modify("+30 minute");
$dt->modify("+30 second");
//echo $dt->format('d/m/Y H:i:s') ;
$heurederetrait= $dt->format('d/m/Y H:i:s') ;*/


    $etat1="pret";
    $mysqli = new mysqli($host, $name, $passwd, $dbname);
        //Suppression d'une ligne à l'aide d'une instruction préparée

        if($stmt = $mysqli-> prepare("UPDATE `commande` SET Etat= '$etat1' WHERE idcom ='$idcommande'")){
          // Le message est mis dans la session, il est préférable de séparer message normal et message! d'erreur.
      
        if($stmt->execute()) {
          $_SESSION['message'] = "repas pret";
      } else {
          $_SESSION['message'] =  "error 101";
      }      
    }
        header('Location: gestion_commandes.php');
  } 
  ?>

<?php
//supprimer un repas
  function  commapreparation($idcommande){
    require_once("param.inc.php");
    $etat0="En preparation";
    $mysqli = new mysqli($host, $name, $passwd, $dbname);
        //Suppression d'une ligne à l'aide d'une instruction préparée

        if($stmt = $mysqli-> prepare("UPDATE `commande` SET Etat= '$etat0' WHERE idcom ='$idcommande'")){
          // Le message est mis dans la session, il est préférable de séparer message normal et message! d'erreur.
      
        if($stmt->execute()) {
          $_SESSION['message'] = "repas pret";
      } else {
          $_SESSION['message'] =  "error 101";
      }      
    }
        header('Location: gestion_commandes.php');
  } 
  ?>

 <?php
//supprimer une commande
  function  annulerCommande($idplat){
    require_once("param.inc.php");
    $etat2='prise en charge';
        //Créez l'objet PDO
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $name, $passwd);
        //Suppression d'une ligne à l'aide d'une instruction préparée
        $sql = "DELETE FROM `commande` WHERE `idcom` = :idplat AND Etat='$etat2'";
        //Préparez notre déclaration DELETE
        $stmt = $pdo->prepare($sql);
        //Liez la variable $name au paramètre :name
        $stmt->bindValue(':idplat', $idplat);
        //Exécuter notre instruction DELETE
        $res = $stmt->execute();
        header('Location: pannier.php');
  } 
  ?>
