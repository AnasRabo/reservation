<?php 

require_once('../config.php');

require_once('../model/Reservation.model.php');

$reservation = null;

// je vérifie si le form a été envoyé
if ($_SERVER["REQUEST_METHOD"] === "POST") {

	// je récupère les données du formulaire 
	$name = $_POST['name'];
	$place = $_POST['place'];
	//  DateTime pour les dates repuperer les dates
	$startDate = new DateTime($_POST['start-date']);
	$endDate =  new DateTime($_POST['end-date']);

	// je regarde si cleaning option a été sélectionné
	
	if ($_POST['cleaning-option'] === "on") {
		$cleaningOption = true;
	} else {
		$cleaningOption = false;
	}
	
	// je créé une réservation 
	$reservation = new Reservation($name, $place, $startDate, $endDate, $cleaningOption);
}

require_once('../view/create-reservation.view.php');