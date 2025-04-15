<?php 

require_once('../config.php');

require_once('../model/Reservation.model.php');

// message vide 
$message = "";

// recuperation des valeus presente dans le post
if ($_SERVER["REQUEST_METHOD"] === "POST") {

	// je récupère les données du formulaire 
	$name = $_POST['name'];
	$place = $_POST['place'];

	//  création des DateTime pour recuperer les dates 
	$startDate = new DateTime($_POST['start-date']);
	$endDate =  new DateTime($_POST['end-date']);

	//  si cleaning option a été sélectionné 
	if ($_POST['cleaning-option'] === "on"){
		$cleaningOption = true;
	} else {
		$cleaningOption = false;
	}
	
	// je créé une réservation en lui envoyant les données attendues
	$reservation = new Reservation($name, $place, $startDate, $endDate, $cleaningOption);

	// je créé un message avec le prix de la réservation
	$message = "Votre réservation est confirmée, au prix de " . $reservation->totalPrice;

}

require_once('../view/create-reservation.view.php');