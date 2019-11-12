<?php include("head.php"); ?>
<form action="http://bienvu.net/script.php" method="POST">
    <div class="form-group">
        <p class="text-danger font-weight-bold">* Informations obligatoires</p>
        <fieldset>
            <legend>Vos coordonnées</legend>
            <div>
                <label for="nom">Votre nom: <input type="text" id="nom" name="nom"></label>
                <span id="missName" class="star">*</span>
            </div>
            <div>
                <label for="fname">Votre prénom : <input type="text" id="fname" name="prenom"></label>
                <span id="missFname" class="star">*</span>

            </div><br>
            <div>
                <label id="sexe">Sexe:
                    <input type="radio" class="sexe" id="Fem" name="sexe" value="femme"> Femme
                    <input type="radio" class="sexe" id="Mas" name="sexe" value="homme"> Homme
                </label>
                <span id="missGenre" class="star">*</span>
            </div>
            <div>
                <label for="Bday">Date de naissance: <input type="date" id="Bday" name="ddn"></label>
                <span id="missDate" class="star">*</span>
            </div>
            <div>
                <label for="cpostal">Code postal: <input type="text" id="cpostal" name="cpostal"></label>
                <span id="missCP" class="star"></span>
            </div>
            <div>
                <label for="adresse">Adresse: <input type="text" id="adresse" name="adresse"></label>
                <span id="missAdr" class="star"></span>
            </div>
            <div>
                <label for="mail">Email: <input type="email" id="mail" name="email" placeholder="exemple.exemple@afpa.fr"></label>
                <span id="missMail" class="star">*</span>
            </div>
        </fieldset>
        <fieldset>
            <legend>Votre demande</legend>
            <div>
                <label for="suj">Sujet:
                    <select id="suj">
                        <option value="Mes commandes">Mes commandes</option>
                        <option value="Question sur le produit">Question sur le produit</option>
                        <option value="Réclamation">Réclamation</option>
                        <option value="Autres">Autres</option>
                    </select>
                </label>
                <span id="missSuj" class="star"></span>
            </div>
            <label for="question">Votre question: <textarea name="question" id="question" cols="30" rows="3"></textarea></label>
            <span id="missQuestion" class="star">*</span>
        </fieldset>
        <label for="check"><input required type="checkbox" id="check" name="ok"> J'accepte le traitement informatique de ce formulaire</label>
    </div>
    <button type="submit" id="send" class="btn btn-info" name="ok">Envoyer</button>
    <button type="reset" id="cancel" name="cancel" class="btn btn-warning">Annuler</button>
</form><br>
</div>
</div>
<?php include("foot.php"); ?>