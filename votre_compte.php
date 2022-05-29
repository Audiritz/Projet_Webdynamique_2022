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
	<!-- Recherche
		<?php include 'include/menu_navigation_principal.php';?> -->
		<?php include 'include/menu_nav.php';?>
		



		
		
		
		<?php 

		if(! empty($_SESSION['open_admin'])){
			?>
			<p>ID : <?php echo $_SESSION['id_admin'] 	 ?></p>
			<p>Nom : <?php echo $_SESSION['nom_admin'] 	 ?></p>
			<p>Prénom : <?php echo $_SESSION['prenom_admin'] 	 ?></p>
			<p>Email : <?php echo $_SESSION['email_admin'] 	 ?></p>
			

			<p><a href='include/logout.php'>Déconnexion</a></p>
			<p><a href='CreerCoach.php'>Créer Coach</a></p>
			<p><a href='pop.php'>Ajouter une photo</a></p>
			<?php


		}
		
		elseif(! empty($_SESSION['open_users'])){
			
			?>
			<p>ID : <?php echo $_SESSION['id_users'] 	 ?></p>
			<p>Nom : <?php echo $_SESSION['nom_users'] 	 ?></p>
			<p>Prénom : <?php echo $_SESSION['prenom_users'] 	 ?></p>
			<p>Email : <?php echo $_SESSION['email_users'] 	 ?></p>
			<p>Naissance : <?php echo $_SESSION['naissance_users'] 	 ?></p>
			<p>Date de création du compte : <?php echo $_SESSION['date_users'] 	 ?></p>
			<p>Email : <?php echo $_SESSION['email_users'] 	 ?></p>
			<p><a href='include/logout.php'>Déconnexion</a></p><?php
		}
		elseif(! empty($_SESSION['open_coachs'])){

			?> 
			<p>ID : <?php echo $_SESSION['id_coachs'] 	 ?></p>
			<p>Nom : <?php echo $_SESSION['nom_coachs'] 	 ?></p>
			<p>Prénom : <?php echo $_SESSION['prenom_coachs'] 	 ?></p>
			<p>Email : <?php echo $_SESSION['email_coachs'] 	 ?></p>
			<p>discipline 1 : <?php echo $_SESSION['discipline_coachs'] 	 ?></p>
			<p>discipline 2 : <?php echo $_SESSION['discipline2_coachs'] 	 ?></p>
			<p>PP : <?php   print '<img src="'.$_SESSION['pp_coachs'].'">';	 ?></p>
			<p>CV : <?php print '<img src="'.$_SESSION['cv_coachs'].'">';	 ?></p>



			<?php



			
			?><a href='include/logout.php'>Déconnexion</a><?php
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
<?php include 'include/footer.php'; ?>
	</body>
	</html>