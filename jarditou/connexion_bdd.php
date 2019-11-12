<?php

function connexionBase(){
    // Paramètre de connexion serveur
    $host = "localhost";
    $login= "jsagez";     // Votre loggin d'accès au serveur de BDD 
    $password="jsagez98";    // Le Password pour vous identifier auprès du serveur
    $base = "jsagez";    // La bdd avec laquelle vous voulez travailler 
    try{
        $db = new PDO('mysql:host=' .$host. ';charset=utf8;dbname=' .$base, $login, $password);
        return $db;
    }catch (Exception $e){
        echo 'Erreur : ' . $e->getMessage() . '<br>';
        echo 'N° : ' . $e->getCode() . '<br>';
        die('Connexion au serveur impossible.');
    }   
}
