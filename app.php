<?php
function chargement_classes($class) {
	if (file_exists('core/' . $class . '.php')) {
    	include 'core/' . $class . '.php';
	}
	else if (file_exists('controllers/' . $class . '.php')) {
    	include 'controllers/' . $class . '.php';
	}
	else if (file_exists('models/' . $class . '.php')) {
    	include 'models/' . $class . '.php';
	}
	else { echo "Problème de chargement de la classe $class";}
}
/*
function chargement_css($style) {
	if(file_exists('ressources/' . $style .'.css')){
		echo "<link rel='stylesheet' type='text/css' href='../../ressources/$style.css'>";
	}
	
}*/

function lien($route) {
	//PHP_SELF => renvoie l'URL complète
	return explode('app.php',$_SERVER['PHP_SELF'])[0]."app.php".$route;
}
function src($route) {

	return explode('app.php', $_SERVER['PHP_SELF'])[0].$route;
}

spl_autoload_register('chargement_classes');
// spl_autoload_register('chargement_css');


$app = new Application($_SERVER['PHP_SELF']);
$app->run();
