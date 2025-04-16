<?php
require_once("../config.php");

require_once("../model/reservation.model.php");

require_once("../model/reservation.repository.php");
require_once("../view/home-view.php");

$reservation = null; //j'initialise ma valeur de reservation à null 

$error= null; //j'initialise la valeur error à null


if ($_SERVER["REQUEST_METHOD"]=== "POST"){ // si le serveur reçoit bien une info en methode POST alors 
    
    $firstName=$_POST['firstName']; // la variable firstname est égale a la method POST envoyé  intitulé 'firstName'
    $name=$_POST['name']; // la variable name est égale a la method POST intitulé 'name'
    $place=$_POST['place']; // la variable place est égale a la method POST intitulé 'place'
    $startDate= new DateTime($_POST['start-date']); //la variable startDate creer une nouvelle date qui a pour la valeur la 'startDate' envpyé en methode post
    $endDate= new DateTime(  $_POST['end-date']);  //la variable endDate creer une nouvelle date qui a pour la valeur la 'endDate' envoyé en methode post


    if ($_POST['cleaning-option']=="on"){ // si la valeur cleanoption envoyé en method post est égale à 'on'
        $cleaningOption=true; //alors la variable cleaningoption devient true 

    }else{
        $cleaningOption=false; //sinon elle sera false

    }

    try{

    //la variable reservation contient la class ainsi que les fonction que nous avons parametrer dans le model reservation. 
    // il creer une nouvelle reservation qui prends en compte firstname, name, place, startDate, endDate et le cleanOption.
    $reservation = new Reservation($firstName, $name, $place, $startDate, $endDate, $cleaningOption);
    persistReservation($reservation);

    } catch(Exception $e){ //attrappe l'exception a la variable $e puis 
        $error = $e->getMessage();
    }
}
$reservationForUser = findReservationForUser();


require_once ("../view/create-reservation.view.php") ;