 <?php session_start(); ?>
 <!DOCTYPE html>
 <html>

 <head>
 	<title>Connexion</title>
 	<meta charset="uft-8" />
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

 	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

 	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

 	<link rel="stylesheet" href="design/style.css">
 </head>

 <body>

 	<!-- <?php include 'include/menu_navigation_moncompte.php'; ?> -->
 	<?php include 'include/database.php' ?>
 	<?php include 'include/menu_nav.php'; ?><br><br><br><br><br><br><br>
 	<h1>Connexion compte Coach</h1>
 	<form method="post">
 		<div id="wrappercompte">
 			<tr>
 				<td>Email:</td>
 				<td><input type="text" step="0.01" name="email" id="email"></td>
 			</tr>
 			<br><br>

 			<tr>
 				<td>Mot de passe:</td>
 				<td><input type="password" step="0.01" name="mp" id="mp"></td>
 			</tr>

 			<br><br>
 			<tr>
 				<td colspan="2" align="center">
 					<input type="submit" name="cformlogin" id="cformlogin" value="Soumettre">
 				</td>
 			</tr>
 		</div>
 	</form>
 	<?php include 'include/connexion_coach.php' ?>
 	<?php include 'include/footer.php'; ?>


 </body>

 </html>