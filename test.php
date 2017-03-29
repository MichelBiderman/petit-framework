<?php
function src($route) {
	//
	echo explode('app.php', $_SERVER['PHP_SELF'])[0].$route;
}

$dir="ressources/images/*.{jpg,jpeg,gif,png}";
// $dir = 'photos/miniatures';
$files = glob($dir,GLOB_BRACE);
  
echo 'Listing des images du repertoire miniatures <br />';
foreach($files as $image)
{ 
   $f= str_replace($dir,'',$image);
   echo $f.'<br />';
   // echo "<img src='{$f}'/>"."<br>";
   // src('/'.$image) ."<br>";
}

//il faut maintentant redimensionner les images pour un affichage régulier et coorect !
