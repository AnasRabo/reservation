<?php 

require_once('../config.php');

require_once('../model/Reservation.model.php');
require_once('../model/Reservation.repository.php');

$reservation = null;
$error = null;

// je vérifie si le form a été envoyé
if ($_SERVER["REQUEST_METHOD"] === "POST") {

	// je récupère les données du formulaire envoyées par l'utilisateur
	$name = $_POST['name'];
	$place = $_POST['place'];
	// je créé des DateTime pour les dates (car le formulaire envoie des chaines de caractères et j'ai besoin de vraies dates)
	$startDate = new DateTime($_POST['start-date']);
	$endDate =  new DateTime($_POST['end-date']);

	// je regarde si cleaning option a été sélectionné et je transforme la valeur
	// de l'input en true ou false
	if ($_POST['cleaning-option'] === "on") {
		$cleaningOption = true;
	} else {
		$cleaningOption = false;
	}
	
	try {
		// je créé une réservation : une instance de classe, en lui envoyant les données attendues
		$reservation = new Reservation($name, $place, $startDate, $endDate, $cleaningOption);
		persistReservation($reservation);

	} catch(Exception $e) {
		$error = $e->getMessage();
	}	

	
}

require_once('../view/create-reservation.view.php');