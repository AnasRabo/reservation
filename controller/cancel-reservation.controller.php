<?php

require_once('../config.php'); //on récupere la confi
require_once('../model/reservation.model.php'); //on récupere le model de la reservation contenant la class
require_once('../model/reservation.repository.php'); // on récupere le repository contenant la fonction findReservationForUser
require_once('../view/home-view.php');

$reservationForUser = findReservationForUser(); // on cree la variable afin d'afficher le récapitulatif de la commande grace a la fonction

$cancelMessage = "";


if ($_SERVER["REQUEST_METHOD"] === "POST") { 
    // Vérification de la méthode POST
    
    // d'appeler la méthode 'cancel' correctement
    if (isset($reservationForUser)) {
        $reservationForUser->cancel(); // Ajout des parenthèses pour appeler la méthode
        $cancelMessage = "Votre séjour est bien annulé"; // Correction des espaces et amélioration de la lisibilité
        persistReservation($reservationForUser);
        
    } else {
        echo "Erreur : la réservation n'a pas été trouvée."; // Message d'erreur en cas de problème
    }
}


require_once('../view/cancel-reservation.view.php'); // on récupere la view annuler la commande contenant la page annuler la commande 