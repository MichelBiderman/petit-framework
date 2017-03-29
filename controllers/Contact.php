<?php


class Contact {

	public function index() {
		return new View("contact");
	}
	public function afficher() {
		if (isset($_POST) && isset($_POST['prenom']) && isset($_POST['nom'])) {
			$nom = $_POST['nom'];
			$prenom = $_POST['prenom'];
		}
		else return new View("error");

		return new View("templatebase",["page"=>"Resultat de contact","contenu"=>"<b>Le nom est : </b> $nom <br /><b>Le prenom est : </b>$prenom"]);
	}

}