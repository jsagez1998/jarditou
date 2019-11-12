<?php include("head.php"); ?>
<div class="table-responsive">
    <table class="table table-striped table-hover table-bordered">
      <thead>     
       <tr>
              <th class="colN"><b>Libellé</b></th>
              <th class="colN"><b>Référence</b></th>
              <th class="colN"><b>Description</b></th>
              <th class="colN"><b>Prix</b></th>
            </tr>
          </thead>
          <tbody> 
    <?php     
    require "connexion_bdd.php"; // Inclusion de notre bibliothèque de fonctions
    $db = connexionBase(); // Appel de la fonction de connexion
    $pro_id = $_GET["pro_id"];
    $requete = "SELECT pro_libelle, pro_ref, pro_description, pro_prix FROM produits WHERE pro_id=".$pro_id;
    $produit = $db->query($requete);
    if (!$produit){
      $tableauErreurs = $db->errorInfo();
      echo $tableauErreur[2]; 
      die("Erreur dans la requête");
  }
          
  if ($produit->rowCount() == 0){
  // Pas d'enregistrement
  die("La table est vide");
  }   
  
  while ($row = $produit->fetch(PDO::FETCH_OBJ)){
    echo "<tr><td>".$row->pro_libelle."</td>\n"; 
    echo "<td>".$row->pro_ref."</td>\n";
    echo "<td>".$row->pro_description."</td>\n";
    echo "<td>".$row->pro_prix." €</td>\n</tr>";
  }
    ?>
    </tbody>
  </table>
  <?php
    echo'<a  id="mod" href="modif.php?pro_id='.$pro_id.'">Modifier</a>
    <a href="#" id="supp" onclick="suppression('.$pro_id.')">Supprimer</a>';
    include("foot.php");
    ?>
