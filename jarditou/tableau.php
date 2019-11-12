<?php include("head.php"); ?>
<div class="table-responsive">
  <table class="table table-striped table-hover table-bordered">
    <thead>
      <tr>
        <th class="colN"><b>Photo</b></th>
        <th class="colN"><b>ID</b></th>
        <th class="colN"><b>Catégorie</b></th>
        <th class="colN"><b>Libellé</b></th>
        <th class="colN"><b>Prix</b></th>
        <th class="colN"><b>Couleur</b></th>
      </tr>
    </thead>
    <tbody>
      <?php
      require "connexion_bdd.php"; // Inclusion de notre bibliothèque de fonctions
      $db = connexionBase(); // Appel de la fonction de connexion	
      $select = "SELECT pro_photo, pro_id, cat_nom, pro_libelle, pro_prix, pro_couleur FROM produits JOIN categories ON cat_id=pro_cat_id ORDER BY pro_id ASC";
      $result = $db->query($select);

      if (!$result) {
        $tableauErreurs = $db->errorInfo();
        echo $tableauErreur[2];
        die("Erreur dans la requête");
      }

      if ($result->rowCount() == 0) {
        // Pas d'enregistrement
        die("La table est vide");
      }

      while ($row = $result->fetch(PDO::FETCH_OBJ)) {
        $balise = '<td><a href="detail.php?pro_id=' . $row->pro_id . '">';
        echo "<tr>";
        echo "<td><div class='visuel'><img class='rounded img-fluid img-thumbnail' src='assets/img/$row->pro_photo'></div></td>\n";
        echo "<td>" . $row->pro_id . "</td>\n";
        echo "<td>" . $row->cat_nom . "</td>\n";
        echo $balise . $row->pro_libelle . "</a></td>\n";
        echo "<td>" . $row->pro_prix . " €</td>\n";
        echo "<td>" . $row->pro_couleur . "</td>\n";
        echo "</tr>";
      }

      ?>
    </tbody>
  </table>
  <a id="add" href='produits_ajout.php'>+Ajouter un produit</a><br><br>
</div>
<?php include("foot.php"); ?>