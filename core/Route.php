<?php


class Route {
	private $controlleur;
	private $methode;

	public function __construct($controlleur='',$methode='') {
		$this->controlleur = $controlleur;
		$this->methode = $methode;
	}

	public function __toString() {
		return "Controlleur : {$this->controlleur} / Methode : {$this->methode}";
	}

	public function setControlleur($controlleur) { $this->controlleur = $controlleur; }
	public function setMethode($methode) { $this->methode = $methode; }


	public function getControlleur() { return $this->controlleur; }
	public function getMethode() { return $this->methode; }


}