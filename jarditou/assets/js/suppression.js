function suppression(id) {
    var confirmation = confirm("Voulez vous vraiment supprimer cet enregistrement ?");
    if (confirmation) { //si ok
        location= "suppression_script.php?pro_id=" + id; //envoi vers le script php
    }else{ //si annuler
        location="tableau.php";//redirection vers le tableau
    }
} 