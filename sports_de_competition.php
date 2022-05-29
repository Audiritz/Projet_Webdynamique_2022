<?php  session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Sport en compétition</title>
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
		<link rel="stylesheet" href="design/sports_de_competition.css">
	</head>

	<body>
		<?php include 'include/menu_navigation_principal.php';?>
		<?php include 'include/menu_navigation_toutparcourir.php';?>
		<?php include 'include/menu_navigation_sportdecompet.php';?>
		<?php include 'include/menu_nav.php';?>

		<div class="sport-grid1">
			<div class="sport">
				<div class="image-row">
					<img class="image-sport" src="img/Basketball.jpg" alt="Basketball">
				</div>
				<div class="description-row">
					<p class="nom-sport">
						Basketball
					</p>
					<p class="button-coach">
						<a href="basket.php">Voir Coach &#8627;</a>
					</p>
				</div>
			</div>
			
			<div class="sport">
				<div class="image-row">
					<img class="image-sport" src="img/Rugby.jpg" alt="Rugby">
				</div>
				<div class="description-row">
					<p class="nom-sport">
						Rugby	
					</p>
					<p class="button-coach">
						<a href="rugby.php">Voir Coach &#8627;</a>
					</p>
				</div>
			</div>

			<div class="sport">
				<div class="image-row">
					<img class="image-sport" src="img\Football.jpg" alt="Football">
				</div>
				<div class="description-row">
					<p class="nom-sport">
						Football
					</p>
					<p class="button-coach">
						<a href="foot.php">Voir Coach &#8627;</a>
					</p>
				</div>
			</div>
		</div>
		
		<div class="sport-grid2">
			<div class="sport">
				<div class="image-row">
					<img class="image-sport" src="img/Tennis.jpg" alt="Tennis">
				</div>
				<div class="description-row">
					<p class="nom-sport">
						Tennis
					</p>
					<p class="button-coach">
						<a href="tennis.php">Voir Coach &#8627;</a>
					</p>
				</div>
			</div>
			
			<div class="sport">
				<div class="image-row">
					<img class="image-sport" src="img/Natation.jpg" alt="Natation">
				</div>
				<div class="description-row">
					<p class="nom-sport">
						Natation	
					</p>
					<p class="button-coach">
						<a href="natation.php">Voir Coach &#8627;</a>
					</p>
				</div>
			</div>

			<div class="sport">
				<div class="image-row">
					<img class="image-sport" src="img\Plongeon.jpg" alt="Plongeon">
				</div>
				<div class="description-row">
					<p class="nom-sport">
						Plongeon
					</p>
					<p class="button-coach">
						<a href="plongeon.php">Voir Coach &#8627;</a>
					</p>
				</div>
			</div>
		</div>
		<?php include 'include/footer.php'; ?>
	</body>
</html>