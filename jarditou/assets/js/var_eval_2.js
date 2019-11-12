//Element HTML des zones à remplir
var btnForm = document.getElementById("send");
var lname = document.getElementById("nom");
var fname = document.getElementById("fname");
var cp = document.getElementById("cpostal");
var adress = document.getElementById("adresse");
var Bday = document.getElementById("Bday");
var email = document.getElementById("mail");
var Suj = document.getElementById("suj");
var Question = document.getElementById("question");
var date = document.getElementById("Bday");
var homme = document.getElementById("Mas");
var femme = document.getElementById("Fem");

//Element HTML pour les messages d'erreurs 
var missName = document.getElementById("missName");
var missFname = document.getElementById("missFname");
var missDate = document.getElementById("missDate");
var missAdr = document.getElementById("missAdr");
var missGenre = document.getElementById("missGenre");
var missSuj = document.getElementById("missSuj");
var missQuest = document.getElementById("missQuestion");
var missGenre = document.getElementById("missGenre");
var missMail = document.getElementById("missMail");
var missCP = document.getElementById("missCP");

//RegEx
var Caract = new RegExp(/^[a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœÉ]+(?:(?:\-| |\')?[a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœÉ]+)*$/);
var rxAdr = new RegExp(/^(?:\d+\,?(?: [a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœÉ\-]+){2,}|(?:[a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœÉ\-]+(?: [a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœÉ\-]+)+))$/);
var rxMail = new RegExp(/^\w+[\w\!#\$%&\'\*\+\-\/=\?\^\`\{|\}~]*@[\w\!#\$%&\'\*\+\-\/=\?\^\`\{|\}~]+\.[a-zA-Z]+$/);
var rxDate =new RegExp(/^(?:\d\d?[\/\- ]\d\d?[\/\- ](?:\d\d)(?:\d\d)?)|(?:(?:\d\d)(?:\d\d)?[\/\- ]\d\d?[\/\- ]\d\d?)$/);
var rxCP =new RegExp(/^(?:(?:[013-9]\d)|(?:2[\dabAB]))\d{3}/);