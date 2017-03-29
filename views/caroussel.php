<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?= src("ressources/styleFramework.css")?>">
	<link rel="stylesheet" type="text/css" href="<?= src("ressources/bootstrap-3.3.6/dist/css/bootstrap.min.css")?>">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <style>
	  .carousel-inner > .item > img,
	  .carousel-inner > .item > a > img {
	      width: 20%;
	      margin: auto;
	  }
 	 </style>
	<title>template de caoussel</title>
</head>
<body>
<div class="jumbotron text-center">
  <h1>Template de caroussel !</h1>
  <p>il y aura là une image de chaque thème par exemple</p> 
</div>
<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="../../ressources/images/photo_1.jpg" alt="appareil" width="200" height="200">
        <div class="carousel-caption">
          <h3>l'art de la photo</h3>
          <p>on ajoutera ici une description de l'image</p>
        </div>
      </div>

      <div class="item">
        <img src="../../ressources/images/photo_2.jpg" alt="juju" width="200" height="200">
        <div class="carousel-caption">
          <h3>du grand art !</h3>
          <p>Photo tendresse entre mère et fille</p>
        </div>
      </div>
    
      <div class="item">
        <img src="../../ressources/images/sweat.jpg" alt="sweat" width="200" height="200">
        <div class="carousel-caption">
          <h3>aricle de vetement</h3>
          <p>Magnifique sweat à capuche pour la maudite somme de 10€ !</p>
        </div>
      </div>

      <div class="item">
        <img src="../../ressources/images/photo_2.jpg" alt="juju" width="200" height="200">
        <div class="carousel-caption">
          <h3>du grand art !</h3>
          <p>Photo prout entre mère et fille</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</body>
</html>