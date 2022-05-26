<?php  session_start(); ?>
<!DOCTYPE html>
<html>

<head>
	<title>Acceuil</title>
	<meta charset="uft-8" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
	integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
	integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
	crossorigin="anonymous"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
	integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
	crossorigin="anonymous"></script>

	<link rel="stylesheet" href="design/style.css">
</head>

<body>
    
	<?php include 'include/menu_navigation_principal.php';?>
	
	<div id="wrapper">  

		<?php include 'include/menu_nav.php';?>



		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="img/sainté.jfif" alt="First slide">
					<div class="carousel-caption d-none d-md-block">
						<h5>Foot L1, Saint-Etienne </h5>
						<p>Saint-Étienne en ordre de bataille avant les barrages contre Auxerre</p>
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="img/charles.jpg" alt="Second slide">
					<div class="carousel-caption d-none d-md-block">
						<h5>MMA UFC</h5>
						<p>Charles Oliveira bat Justin Gaethje lors de l'UFC 274 mais repart sans ceinture</p>
					</div>

				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="img/moutet.jpg" alt="Third slide">
					<div class="carousel-caption d-none d-md-block">
						<h5>Roland-Garros (H)</h5>
						<p>Moutet domine Wawrinka et affrontera Nadal au 2e tour de Roland-Garros</p>
					</div>
				</div>

			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>

		<br>
		<?php include 'include/footer.php'; ?>
	</div>
</div>

</body>

</html>