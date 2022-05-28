<?php  session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Salle de sport OMNES</title>
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
		<link rel="stylesheet" href="design/salle_de_sport.css">
	</head>
	<body>
		<?php include 'include/menu_navigation_principal.php';?>
		<?php include 'include/menu_navigation_toutparcourir.php';?>
		<?php include 'include/menu_nav.php';?>
		<p class="titre">
			Salle de sport OMNES
		</p>

		<div class="salle-de-sport-grid">
			<div class="image-row">
				<img class="image-salle" src="img/Salle de sport.jpg" alt="salle-de-sport">
			</div>

			<div class="grid-bottom">
				<div class="description-collumn">
					<p class="description">
						Salle : G-001 
					</p>
					<p class="description">
						Téléphone : +33 01 22 33 44 55
					</p>
					<p class="description">
						Email : salle.sport@omnessports.fr
					</p>
				</div>
				<div class="button-collumn">
					<a href="" class="services-button">Nos services</a>
				</div>	

			</div>
		</div>
		<?php include 'include/footer.php'; ?>
		
	</body>
</html>