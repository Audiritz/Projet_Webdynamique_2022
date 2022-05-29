 <?php  session_start(); ?> 
<!DOCTYPE html>
<html>
<head>
	<title>Connexion</title>
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
	Connexion
	<?php include 'include/menu_navigation_principal.php';?>
	<?php include 'include/menu_navigation_moncompte.php';?>
	<?php include 'include/database.php'?>
	<?php include 'include/menu_nav.php';?><br><br><br><br><br><br><br>
	<h1>Connexion compte Administrateur</h1>
	<form method="post">
		<table>
			<tr>
			<div class="col-md-6 mb-3">
                    <label for="email">Email <span class="text-muted">(Optional)</span></label>
                    <input type="email" class="form-control" id="email" placeholder="you@example.com">
                </div>
			</tr>


			<tr>
			<div class="col-md-6 mb-3">
                    <label for="mp">Mot de passe</label>
                    <input type="password" class="form-control" id="mp" placeholder="">
                </div>
			</tr>


			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="formlogin" id="formlogin" value="Soumettre">
				</td>
			</tr>
		</table>
	</form>
	<?php include 'include/connexion_admin.php'?>
	<?php include 'include/footer.php'; ?>
	

</body>
</html>