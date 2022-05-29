<?php  session_start(); ?>
<!DOCTYPE html>
<html>

<head>
	<title>tout parcourir</title>
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

	<body>
		<?php include 'include/menu_navigation_principal.php';?>
		<?php include 'include/menu_navigation_toutparcourir.php';?>


		<div id="wrapper">
			<?php include 'include/menu_nav.php';?>


			<div class="card-deck">
				<div class="card">
					<img class="card-img-top" src="img/Activitésalle.jfif" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Activités sportives en salle</h5><a href="activites_sportives.php" class="btn btn-outline-secondary">GO</a>
						<p class="card-text">Vous pouvez retrouver nos activités sportives collectives en salle de sport ainsi que différentes option de notre salle de sport</p>
						
					</div>
					<div class="card-footer">
						<small class="text-muted">36$/mois</small>
					</div>
				</div>
				<div class="card">
					<img class="card-img-top" src="img/sportcompet.jfif" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Sport de Competition</h5><a href="sports_de_competition.php" class="btn btn-outline-secondary">GO</a>
						<p class="card-text">Vous pouvez pratiquer certains sport collectif ou individuel dans lesquels des competitions entre amateur sont organisés entre différents club </p>
					</div>
					<div class="card-footer">
						<small class="text-muted">25$/mois</small>
					</div>
				</div>
				<div class="card">
					<img class="card-img-top" src="img/salledesport.jfif" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Salle de Sport</h5><a href="salle_de_sport.php" class="btn btn-outline-secondary">GO</a>
						<p class="card-text">Retrouver ici toutes les informations concernant nos salles de sport</p>
					</div>
					<div class="card-footer">
						<small class="text-muted">17$/mois</small>
					</div>
				</div>
			</div>
		</div>
		<br><br><br>
		<?php include 'include/footer.php'; ?>
	</body>

	</html>