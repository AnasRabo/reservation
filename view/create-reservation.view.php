
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reservation</title>
</head>

<body>
    

    <h1>Reservation de votre séjour</h1>

    <form method="post">

        <!-- je creer un formyulaire dans la view -->
        <label>Prenom
            <input type="text" placeholder="firstName" name="firstName">
        </label>

        <Label>Nom
            <input type="text" placeholder="Name" name="name">
        </Label>

        <label>Lieu
            <select name="place" id="" name="place">
                <option value="Chateau de versailles">Chateau de versailles</option>
                <option value="Tour Eifel">Tour Eifel</option>
                <option value="Arc de triomphe">Arc de triomphe</option>
                <option value="Invalide">Invalide</option>
                <option value="Quai de seines">Quai de seines</option>
                <option value="Balard">Balard</option>
                <option value="Issy les Moulineaux">Issy les Moulineaux</option>
            </select>
        </label>

        <label> Date d'arrivée
            <input type="date" name="start-date">
        </label>


        <label> Date de départ
            <input type="date" name="end-date">
        </label>

        <label>Option de ménage ?
            <input type="checkbox" name="cleaning-option">
        </label>

        <button type="submit">Créer la réservation</button>
    </form>

    <?php if (!is_null($error)) { ?> <!-- si error n'est pas null-->
        <p>La réservation n'a pas été effectuée : <?php echo $error; ?></p> <!--alors on affiche le message : -->
	<?php } ?>


    <?php if (!is_null($reservationForUser)) { ?> <!-- si $reservation n'est pas nulle (! avant le "is") -->

        <div>

            <h2>récapitulatif de la réservation :</h2> <!-- on affiche le titre pour le récap de la reservation-->
            <p>Prénom : <?php echo $reservationForUser->firstName; ?></p> <!-- on affiche le prénom contenu dans la reservation -->
            <p>Nom : <?php echo $reservationForUser->name; ?></p> <!-- on affiche le nom -->
            <p>Lieu : <?php echo $reservationForUser->place; ?></p> <!-- on afiche le lieu de reservation -->
            <p>Dates : <?php echo $reservationForUser->startDate->format('d-m-y'); ?> / <?php echo $reservationForUser->endDate->format('d-m-y'); ?> </p> <!--on affiche la daate d'arrivé et celle de départ au format jours mois année-->
            <p>Prix Total : <?php echo $reservationForUser->totalPrice; ?></p> <!-- on affiche le prix total via la fonction totalprice se trouvant dans la foncton du model-->
            <p>Option de ménage : <?php echo $reservationForUser->cleaningOption ? "oui" : "non" ?></p> <!--on affihe si oui ou non il ya les options ménages-->
        </div>

    <?php } ?>



</body>

</html>
