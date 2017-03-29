<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?= src("ressources/styleFramework.css")?>">
	<title><?php if(isset($page)) echo $page ?></title>
</head>
<body>
<header>
<h1><?php if(isset($page)) echo $page ?></h1>
<?php include('menu.php'); ?>
<br />
</header>
<nav class="centrale">
<h3>
<?php 
echo $commentaire."<br>";
?>
</h3>
<?php
foreach ($images as $image){
	echo "<img src='".src($image)."' width='150px' height='150px' style='display: inlineblock;margin: 30px;'/>";
	};
?>
	</nav>

</body>
</html>