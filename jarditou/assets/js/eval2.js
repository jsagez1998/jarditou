// Exercice 7
function styleError(elem) {
  //factorisation du code modifiant le style
  elem.style.color = "red";
  elem.style.display = "block";
}

function styleValid(elem) {
  //factorisation du code modifiant le style
  elem.style.color = "black";
  elem.style.display = "inline";
}

function checkForm(event) {
  // Fonction appelée par addEventlistener
  //Vérification du form
  if(!(rxCP.test(cp.value) || cp.value=="" )){
    event.preventDefault();
    missCP.textContent="Entrez un code postal valide ou rien";
    styleError(missCP);
  }else{
    missCP.textContent ="OK";
    styleValid(missCP);
  }
  
  if (!Caract.test(fname.value)) {
      // Prénom valide ?
      event.preventDefault();
      missFname.textContent =
      "Entrez un prénom valide";
      styleError(missFname);
  }else{
      missFname.textContent = "OK";
      styleValid(missFname);
  }

  if (!Caract.test(lname.value)) {
  // Nom valide ?
  event.preventDefault();
  missName.textContent ="Entrez un nom valide";
  styleError(missName);
  }else{
  missName.textContent = "OK";
  styleValid(missName);
  }
  
  if (date.value == "") {
  event.preventDefault();
  missDate.textContent = "Date de naissance invalide";
  styleError(missDate);
  }else if(!rxDate.test(date.value)) {
  // IE ne prend pas en charge les input date donc on teste si la date respect la Regex
  event.preventDefault();
  missDate.textContent = "Date de naissance invalide";
  styleError(missDate);
  }else{
  missDate.textContent = "OK";
  styleValid(missDate);
  }

  if(!(adress.value ==""|| rxAdress.test(adress.value))) {
  event.preventDefault();
  missAdr.textContent ="Adresse invalide : Entrez une adresse valide ou rien";
  styleError(missAdr);
  }
  
  if(!(homme.checked || femme.checked)) {
  event.preventDefault();
  missGenre.textContent = "Veuillez sélectionner votre sexe";
  styleError(missGenre);
  }else{
  missGenre.textContent = "OK";
  styleValid(missGenre);
  }

  if(!rxMail.test(email.value)){
  event.preventDefault();
  missMail.textContent = "Adresse mail invalide";
  styleError(missMail);
  }else{
  missMail.textContent = "OK";
  styleValid(missMail);
  }

  if(Suj.selectedIndex==-1) {
  event.preventDefault();
  missSuj.textContent = "Sélectionnez un sujet";
  styleError(missSuj);
  }else{
  missSuj.textContent = "OK";
  styleValid(missSuj);
  }

  if(Question.value==""){
  event.preventDefault();
  missQuest.textContent = "Veuillez entrer votre question";
  styleError(missQuest);
  }else{
  missQuest = "OK";
  styleValid(missQuest);
  }
}

btnForm.addEventListener("click", checkForm);
