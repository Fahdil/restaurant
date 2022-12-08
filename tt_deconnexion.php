<?php
    session_start();
    
    session_destroy();
    unset($_SESSION['authentification']);
   //$_SESSION['authentification']=0;
    
   $_SESSION['deconnecte']="Deconnexion effectuée";
    header('Location: connexion.php');
    
?>