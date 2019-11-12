<?php
include("head.php");
$id = $_GET["pro_id"];
?>
<form action="modif_script.php" method="POST" enctype="multipart/form-data">
    <fieldset>
        <legend>ID produit <?php echo $id ?></legend>
        <div>
            <input type="hidden" value="<?php echo $id ?>" id="pro_id" name="pro_id">
        </div>
        <br>
        <div>
            <?php
            require "connexion_bdd.php"; // Inclusion de notre bibliothèque de fonctions
            $db = connexionBase(); // Appel de la fonction de connexion	
            $sltcat = "SELECT DISTINCT cat_nom, pro_cat_id FROM categories JOIN produits ON produits.pro_cat_id=cat_id";
            $result = $db->query($sltcat);
            ?>
            <label for="pro_cat_id">Catégorie :</label>
            <select id="pro_cat_id" name="pro_cat_id">
                <?php
                while ($row = $result->fetch(PDO::FETCH_OBJ)) {
                    echo "<option value=" . $row->pro_cat_id . ">" . $row->cat_nom . "</option>\n";
                }
                ?>
            </select>
        </div>
        <br>
        <div>
            <label for="pro_description">Description</label>
            <textarea id="pro_description" name="pro_description"></textarea>
        </div>
        <br>
        <div>
            <label for="pro_prix">Prix</label>
            <input type="number" id="prix" name="pro_prix" value="0" min="0" max="9999.99" step="0.01">
        </div>
        <br>
        <div>
            <label for="pro_stock">Stock</label>
            <input type="number" id="pro_stock" name="pro_stock" value="0" min="0" max="9999.99" step="any">
        </div>
        <br>
        <div>
            <label for="pro_couleur">Couleur</label>
            <input type="text" id="pro_couleur" name="pro_couleur">
        </div>
        <br>
        <div>
            <div>
                <label for="pro_photo">Sélectionnez une photo du produit</label><br>
                <input type="hidden" name="MAX_FILE_SIZE" value="30000">
                <input class="form-control" id="photo" name="pro_photo" type="file">
            </div>
        </div>
        <br>
        <div>
            <label for="pro_d_modif">Date de modif</label>
            <input class="form-control" id="photo" name="pro_d_modif" type="date">
        </div>
        <br>
        <div>
            <label for="pro_bloque">Bloquer à la vente ?</label>
            <input type="checkbox" id="pro_bloque" value="1" name="pro_bloque">
        </div>
    </fieldset>
    <br>
    <button type="submit" id="send" class="btn btn-info" name="ok">Envoyer</button>
    <button type="reset" id="cancel" name="cancel" class="btn btn-warning">Annuler</button>
</form><br>
</div>
</div>
<?php include("foot.php"); ?>