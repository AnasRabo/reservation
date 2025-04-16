<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reservation</title>
</head>

<body>
    <main>

        <h1>Annulation de votre séjour</h1> <!-- titre annulation de la reservation-->

        <?php if (!is_null($reservationForUser)) { ?> <!-- si $reservation n'est pas nulle -->

            <div>

                <h2>récapitulatif de la réservation :</h2> 
                <p>Prénom : <?php echo $reservationForUser->firstName; ?></p> 
                <p>Nom : <?php echo $reservationForUser->name; ?></p> 
                <p>Lieu : <?php echo $reservationForUser->place; ?></p> 
                <p>Dates : <?php echo $reservationForUser->startDate->format('d-m-y'); ?> / <?php echo $reservationForUser->endDate->format('d-m-y'); ?> </p> 
                <p>Prix Total : <?php echo $reservationForUser->totalPrice; ?></p> 
                <p>Option de ménage : <?php echo $reservationForUser->cleaningOption ? "oui" : "non" ?></p> <!--on affihe si oui ou non il ya les options ménages-->
            </div>

        <?php } ?>

        <form method="post">
            <button type="submit">Annuler la réservation</button> <!--Bouton annuler la reservation -->
        </form>

        <p><?php echo $cancelMessage?></p>


    </main>
</body>

</html>