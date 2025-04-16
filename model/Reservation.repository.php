<?php

//Pour évviter les appels multiples à session_start():
//session_start() ne peut être appelé qu'une seule fois par requête HTTP.
function startSessionIfNotStarted() {
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
}

//Utilisation de la session = stocker temporairement une réservation
function persistReservation ($Reservation){

    //je démarre la session et j'enregistre l'objet Reservation dans la session
    startSessionIfNotStarted();
    $_SESSION["Reservation"] = $Reservation;
}

function findReservationForUser(){
    
    //on stock les données grâce à la session
    startSessionIfNotStarted();

    //on vérifie si la clé Reservation existe dans $_SESSION
    if(array_key_exists('Reservation',$_SESSION)){

        //si oui renvoie la réservation stocké 
        return $_SESSION["Reservation"];
    }else{
        //si non, renvoie null
        return null;
    }
}