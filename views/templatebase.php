<!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?= src("ressources/styleFramework.css")?>">

	<title><?= $page ?></title>
  </head>
  <body>
   <header>
	<h1><?= $page ?></h1>
	<?php include('menu.php'); ?>
	<br />
   </header>

   <div class="centrale"><?= $contenu ?>
    <p>
   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
   quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
   consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
   cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
   proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
   </div>

   </body>
</html>