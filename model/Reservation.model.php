<?php

class Reservation {

	public $name;
	public $place;

	public $startDate;

	public $endDate;

	public $totalPrice;

	public $nightPrice;

	public $status;

	public $bookedAt;

	public $cleaningOption;

	public $canceledAt;

	public $paidAt;

	public $comment;

	public $commentedAt;

	// méthode appelée automatiquement lors de la création de l'instance de classe (new Reservation())
	// les parametres du constructor sont à remplir aussi lors de l'instance de classe
	public function __construct($name, $place, $startDate, $endDate, $cleaningOption) {

		if (strlen($name) < 2) {
			throw new Exception('Le nom doit comporter plus de deux caractères');
		}

		// utilisateur envoie ces valeurs
		// temporairement "en dur"
		$this->name = $name;
		$this->place = $place;
		$this->startDate = $startDate;
		$this->endDate = $endDate;
		$this->cleaningOption = $cleaningOption;

		$this->nightPrice = 1000;

		// valeurs calculées automatiquement
		$totalPrice = (($this->endDate->getTimestamp() - $this->startDate->getTimestamp()) / (3600 * 24) * $this->nightPrice) + 5000;

		$this->totalPrice = $totalPrice;
		$this->bookedAt = new DateTime();
		$this->status = "CART";
	}


	public function cancel() {
		if ($this->status === "CART") {
			$this->status = "CANCELED";
			$this->canceledAt = new DateTime();
		}
	}

	public function pay() {
		if ($this->status === 'CART') {
			// on devrait un véritable paiement
			$this->status = "PAID";
			$this->paidAt = new DateTime();
		}
	}

	public function leaveComment($userComment) {

		if ($this->status === "PAID") {
			$this->comment = $userComment;
			$this->commentedAt = new DateTime();
		}
	}


	// dans la classe, je peux modifier les valeurs des propriétés si elles sont en public ou en privé
}


// en dehors de la classe si les propriétés sont en public : je peux y accéder / les modifier
// si elles sont en privé : je peux pas y accéder, ni les modifier. Je suis obligé de passer
// par les fonctions (constructor, pay, cancel) pour modifier ma réservation