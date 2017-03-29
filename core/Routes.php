<?php

class Routes  {

	private $controlleur;
	private $methode;
	private $routes;


	public function __construct($controlleur='', $methode='', $routes=[]) {

		$this->controlleur = $controlleur;
		$this->methode = $methode;
		$this->routes = $routes;

	}
	public function __toString() {
		return "Controlleur : {$this->controlleur} / Methode : {$this->methode}";
	}

	public function getControlleur() {
		return $this->controlleuSFconr;
	}
	public function getMethode() {
		return $this->methode;
	}
}