<?php  session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Rdv</title>
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
	
	<!-- <?php include 'include/menu_navigation_principal.php';?> -->
	<?php include 'include/menu_nav.php';?>


<nav class="menu-nav">
	<ul>
		<?php if (!empty($_SESSION['open_users'])) 
		{?>
		<li class="btn">
			<a href="pcreerRdv.php">
			Créer un Rendez-vous
			</a>
		</li><?php 
}
		if (!empty($_SESSION['open_users']) || !empty($_SESSION['open_coachs']) || !empty($_SESSION['open_admin']))
		{

		 ?>
		
		<li class="btn">
			<a href="consulter_rdv.php">
			Consulter les Rendez-vous
			</a>
		</li >
		<?php }
		else{
			echo "Connectez-vous pour accéder au Rendez-vous";
		} ?>
		
	</ul>
</nav>








	<?php include 'include/footer.php'; ?>


	
</body>
</html>