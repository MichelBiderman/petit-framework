<?php

class Main {

	public function index() {
		return new View("templatebase",["page"=>"Bienvenue","contenu"=>"Bienvenue sur mon <b>site</b> ! "]);
	}

	public function error() {
		return new View("error");
	}

	public function presentation() {
		return new View("templatebase",["page"=>"Presentation","contenu"=>"La page de présentation"]);
	}

	public function test() {
		return new View("bootstrap_test");
	}
	public function caroussel() {
		return new View("caroussel");
	}
	public function js() {
		return new View("javascript",["message"=>"Vive le JavaScript !!!!"]);
	}
}