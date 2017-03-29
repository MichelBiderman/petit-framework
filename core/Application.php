<?php

class Application {

	private $route;
	public function __construct($url = "") {
		// Récupération de la route exacte
		$route = explode('app.php',$url)[1];
		$this->route = $route;   //     catalogue/lister
	}

	public function run() {
		// Le routage
		$routeur = new Routeur($this->route);
		$routeRenvoyee = $routeur->findRoute();
		// Le controlleur
		$controlleur = $routeRenvoyee->getControlleur();
		$methode = $routeRenvoyee->getMethode();
		if (file_exists("controllers/{$controlleur}.php") && class_exists($controlleur)) {
				$controlleurInstance = new $controlleur();
				if (method_exists($controlleurInstance,$methode)) {
					$view = $controlleurInstance->$methode();
				}
		}
		// La vue
		if (isset($view)) {
			echo $view;
		}
		else  echo "Une erreur s'est produite !";
		
	}
}