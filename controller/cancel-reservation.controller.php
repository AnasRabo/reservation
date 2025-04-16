<?php 

require_once('../config.php');
require_once('../model/Reservation.repository.php');
require_once('../model/Reservation.model.php');

// j'utilise la fonction findReservationForUser
// pour récupérer la reservation créé par l'utilisateur (ou pas)
// et je la stocke dans la variable $reservationForUser
$reservationForUser = findReservationForUser();

require_once('../view/cancel-reservation.view.php');²