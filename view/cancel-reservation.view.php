<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<header>

		<nav>
			<ul>

			</ul>
		</nav>

	</header>


<main>
	
	<h1>Annuler une réservation</h1>

	<?php if (!is_null($reservationForUser)) { ?>

	<div>
		<p>Récap de la réservation :</p>
		<p>Nom : <?php echo $reservationForUser->name; ?></p>
		<p>Lieu : <?php echo $reservationForUser->place; ?></p>
		<p>Dates : <?php echo $reservationForUser->startDate->format('d-m-y'); ?> / <?php echo $reservationForUser->endDate->format('d-m-y'); ?></p>
		<p>Prix total : <?php echo $reservationForUser->totalPrice; ?></p>
		<p>Option de ménage ? : <?php echo $reservationForUser->cleaningOption ? "oui" : "non"; ?></p>
	</div>

	<?php } ?>

	<form method="POST">

		<button type="submit">Annuler la réservation</button>

	</form>








</main>

</body>
</html>