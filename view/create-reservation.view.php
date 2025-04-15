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
	
	<h1>Créer une réservation</h1>

	<form method="POST">

		<label>Nom
			<input type="text" name="name">
		</label>

		<label>Lieu
			<select name="place">
				<option value="chateau-versailles">Château de Versailles</option>
				<option value="zad-limoges">ZAD de limoges</option>
				<option value="renault-clio">Renault Clio</option>
				<option value="maison-campagne">Maison de campagne</option>
			</select>
		</label>

		<label>Date de début
			<input type="date" name="start-date">
		</label>

		<label>Date de fin
			<input type="date" name="end-date">
		</label>

		<label>Option de ménage ?
			<input type="checkbox" name="cleaning-option">
		</label>

		<button type="submit">Créer la réservation</button>

	</form>

	<?php if (!is_null($reservation)){ ?>

		<div>
			<p>Récap de la réservation :</p>
			<p>Nom : <?php echo $reservation->name; ?></p>
			<p>Lieu : <?php echo $reservation->place; ?></p>
			<p>Dates : <?php echo $reservation->startDate->format('d-m-y'); ?> / <?php echo $reservation->endDate->format('d-m-y'); ?></p>
			<p>Prix total : <?php echo $reservation->totalPrice; ?></p>
			<p>Option de ménage ? : <?php echo $reservation->cleaningOption ? "oui" : "non"; ?></p>
		</div>
		<?php 
	} 
?>



</main>

</body>
</html>