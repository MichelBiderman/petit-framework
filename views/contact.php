<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contact</title>
	<link rel="stylesheet" type="text/css" href="<?= src("ressources/styleFramework.css")?>">
	<link rel="stylesheet" type="text/css" href="<?= src("ressources/bootstrap-3.3.6/dist/css/bootstrap.min.css")?>">
</head>
<body>
<h1> Contact </h1>
<?php include('menu.php'); ?>
<div class="centrale">
<form  class="form form-control" method="POST" action="<?= lien("/contact/afficher") ?>">
<input class="form form-control" type="text" placeholder="prenom ici" name="prenom" />
<input class="form form-control" type="text" placeholder="nom ici" name="nom" />
<input class="form form-control" type="submit" /></form>
</div>
</body>
</html>