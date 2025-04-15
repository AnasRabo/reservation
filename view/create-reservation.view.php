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


	<h2><?php echo $message; ?></h2>

</main>

</body>
</html>