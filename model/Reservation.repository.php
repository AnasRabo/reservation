<?php


function persistReservation($reservation) {

	session_start();

	$_SESSION["reservation"] = $reservation;

}

function findReservationForUser() {

	session_start();

	if (array_key_exists('reservation', $_SESSION)) {
		return $_SESSION["reservation"];
	} else {
		return null;
	}	

}