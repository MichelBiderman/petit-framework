<?php

class Catalogue {

	public function index(){
		return new View("catalogue");
	}

	public function afficher() {
		
		return new View("catalogue",["page"=>"Catalogue","commentaire"=>"Affichage de quelques photos de démo"]);	
	}

	public function lister($repertoire="ressources/images/"){
		$dir=$repertoire."*.{jpg,jpeg,gif,png}";
		$files = glob($dir,GLOB_BRACE);
		$images = [];
		foreach($files as $image){ 	
		   $f= str_replace($dir,'',$image);
		   $images[] = $f;
		   //reste encore le redimensionnement des images pourun affichage régulier et propre
		   // return new View("catalogue",["contenu"=>"test"]);
		}
		return new View("catalogue",["page"=>"Catalogue","commentaire"=>"Affichage de quelques photos de démo","images"=>$images]);
	}
}
