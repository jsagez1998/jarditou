<?php     
      require "connexion_bdd.php"; // Inclusion de notre bibliothèque de fonctions
      $db = connexionBase(); // Appel de la fonction de connexion
      $pro_id = $_GET["pro_id"];
      $delete = "DELETE FROM produits WHERE pro_id=".$pro_id;
      $result = $db->query($delete);
      header("location:tableau.php");
?>