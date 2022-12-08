<?php
  if(isset($_GET['idplat'])){
    delectplat($_GET['idplat']);
  }

?>
<?php
//supprimer un repas
  function  delectplat($idplat){
    require_once("param.inc.php");
   
        //Créez l'objet PDO
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $name, $passwd);
        //Suppression d'une ligne à l'aide d'une instruction préparée
        $sql = "UPDATE `platsduresto` SET `supprimer`=1 WHERE `idplat` = :idplat";
        $sql1 = "UPDATE `commande` SET `supprimer`=1 WHERE `idrep` = :idplat";
        //Préparez notre déclaration DELETE
        $stmt = $pdo->prepare($sql);
        $stmt1 = $pdo->prepare($sql1);
        //Liez la variable $name au paramètre :name
        $stmt->bindValue(':idplat', $idplat);
        $stmt1->bindValue(':idplat', $idplat);
        //Exécuter notre instruction DELETE
        $res = $stmt->execute();
        $res1 = $stmt1->execute();
        header('Location: afficheplatdesrespo.php');
  } 
  ?>
