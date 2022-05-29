<?php  session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Recherche</title>
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
	Recherche
	<?php include 'include/menu_navigation_principal.php';?>
	<?php include 'include/menu_nav.php';?>
	<?php include 'include/footer.php'; ?>
	
	

		
		
		
	<?php 

	if(! empty($_SESSION['open_admin'])){
		
     echo $_SESSION['nom_admin']; 
		
		var_dump($_SESSION);
		?><a href='include/logout.php'>Click here to log out</a>
<a href='CreerCoach.php'>Créer Coach</a><?php
		
		}
		
	elseif(! empty($_SESSION['open_users'])){
		var_dump($_SESSION);
		?><a href='include/logout.php'>Click here to log out</a><?php
	}
	elseif(! empty($_SESSION['open_coachs'])){
var_dump($_SESSION);
?><a href='include/logout.php'>Click here to log out</a><?php
	}
	else{

	?>
	
	<nav class="menu-nav">
		<ul>
			<li class="btn">
				<a href="pconnexion.php">
					client
				</a>
			</li>

			<li class="btn">
				<a href="pconnexion_coach.php">
					coach
				</a>
			</li >
			<li class="btn">
				<a href="pconnexion_admin.php">
					administrateur
				</a>
			</li >

<?php  }?>

		</ul>
	</nav>
	
</body>
</html>