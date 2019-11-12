function suppression(id) {
    var confirmation = confirm("Voulez vous vraiment supprimer cet enregistrement ?");
    if (confirmation) {
        location= "suppression_script.php?pro_id=" + id;
    }else{
        location="tableau.php";
    }
} 