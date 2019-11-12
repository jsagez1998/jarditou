<?php 
    require "connexion_bdd.php";
    //regex
    $lettre = "/^[a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœÉ]+(?:(?:\-| |\')?[a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœÉ]+)*$/";
    $num = "/^[0-9]+$/";
    $rxref = "/^[a-zA-Z]+(?:(?: -|_)?[0-9-a-zA-Z]+)$/";
    $rxlib = "/^\w+$/";
    $Date = "/^(?:\d\d?[\/\- ]\d\d?[\/\- ](?:\d\d)(?:\d\d)?)|(?:(?:\d\d)(?:\d\d)?[\/\- ]\d\d?[\/\- ]\d\d?)$/";
    $rximg = "/([\w|\s|-])*\.(?:jpg|png)/";
    
    //variables html
    $id = $_POST["pro_id"];
    $cat = $_POST["pro_cat_id"];
    $desc = $_POST["pro_description"];
    $prix = $_POST["pro_prix"];
    $stock = $_POST["pro_stock"];
    $couleur = $_POST["pro_couleur"];

    //récupération de l'img
    $photo = $_FILES['pro_photo']['name'];
    $modif = $_POST["pro_d_modif"];
    if(!isset($_POST["pro_bloque"])){
        $bloque = null;
    }else{
        $bloque = $_POST["pro_bloque"];
    }

    //Vérification du formulaire
    $state = true; // variable d'état
    if(!$_POST['pro_id']==strval(intval($_POST['pro_id']))){ //Si $_POST ! de la valeur de la chaine
        echo "Catégorie invalide / non renseigné<br>";
        $state = false;
    }

    if(!$_POST['pro_cat_id']==strval(intval($_POST['pro_cat_id']))){
        echo "Catégorie invalide / non renseigné<br>";
        $state = false;
    }

    if(!$_POST['pro_prix']==strval(floatval($_POST['pro_prix']))){
        echo "Prix invalide / non renseigné<br>";
        $state = false;
    }

    if(!$_POST['pro_stock']==strval(intval($_POST['pro_stock']))){
        echo "Stock invalide / non renseigné<br>";
        $state = false;
    }

    if(!isset($couleur) || !preg_match($lettre, $couleur)){
        echo "Couleur du produit invalide / non renseigné<br>";
        $state = false;
    }

    if(!isset($photo) || !preg_match($rximg, $photo)){
        echo "Format de la photo invalide / non renseigné<br>";
        $state = false;
    }

    if(!empty($modif) && !preg_match($Date, $modif)){
        echo "Date d'ajout invalide<br>";
        $state = false;
    }
    
    if($state==true){
        $db = connexionBase(); // Appel de la fonction de connexion
            $insert = "INSERT INTO produits (`pro_cat_id`, `pro_ref`, `pro_libelle`,`pro_description`, `pro_prix`, `pro_stock`, `pro_couleur`, `pro_photo`, `pro_d_ajout`, `pro_bloque`) 
              VALUES (:cat, :ref, :lib, :desc, :prix, :stock, :couleur, :photo, :ajout, :bloque)";   
            $result = $db->prepare($insert); // préparation de la requete
            $result->bindValue(":cat",$cat);
            $result->bindValue(":ref",$ref);
            $result->bindValue(":lib",$lib);
            $result->bindValue(":desc",$desc);
            $result->bindValue(":prix",$prix);
            $result->bindValue(":stock",$stock);
            $result->bindValue(":couleur",$couleur);
            $result->bindValue(":photo",$photo);
            $result->bindValue(":ajout",$ajout);
            $result->bindValue(":bloque",$bloque);
            $result->execute(); //execution de la requete
           header("location:tableau.php"); // redirection vers tableau.php
    }
