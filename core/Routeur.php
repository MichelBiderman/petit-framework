<?php

class Routeur {
	private $route;
	public function __construct($route="") {
		$this->route = $route;
	}

	public function findRoute() {
		$tableau  = explode("/",$this->route);
		$route = NULL;
		// app.php ou app.php/ => redirection vers le controlleur default, avec la méthode index
		if (count($tableau)==1 || (count($tableau)==2 && $tableau[1]=="")) {
			$route = new Route("Main","index");
		} // app.php/controlleur ou app.php/controlleur/ => redirection vers la méthode index du controlleur "controlleur"
		else if ((count($tableau)==2 && $tableau[1]!="") || (count($tableau)==3 && $tableau[1]!="" && $tableau[2]=="")) {
			$route = new Route(ucfirst($tableau[1]),"index");
		}
		// app.php/controlleur/methode ou app.php/controlleur/methode/ => redirection vers la méthode methode du controlleur controlleur
		else if ((count($tableau)==3 && $tableau[1]!="" && $tableau[2]!="") || (count($tableau)==4 && $tableau[1]!="" && $tableau[2]!="" && $tableau[3]=="")) {
			$route = new Route(ucfirst($tableau[1]),$tableau[2]);
		}
		else {
			$route = new Route("Main","error");
		}
		return $route;
	}
}