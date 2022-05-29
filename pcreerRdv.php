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
	<h1>Créer un Rdv</h1>
	<form method="post">
        <div class="form-row">
            <div class="col">
                <label for="inputFirstName">Debut du RDV</label>
                <input type="text" class="form-control" name="debut" id="debut" placeholder="debut rdv">
            </div>
            <div class="col">
                <label for="inputLastName">Id du Coach</label>
                <input type="number" class="form-control" name="id" id="id" placeholder="Id coach">
            </div>
        </div>
        

        <div class="form-row">
            <div class="col">
                <label class="mr-sm-2" for="specialite1">Discipline</label>
                <select class="custom-select mr-sm-2" name="specialite1" id="specialite1">
                    <option selected>Choose...</option>
                    <option value="1">Musculation</option>
                    <option value="2">Fitness</option>
                    <option value="3">Biking</option>
                    <option value="4">Cardio-Training</option>
                    <option value="5">Cours collectif</option>
                    <option value="6">Basketball</option>
                    <option value="7">Football</option>
                    <option value="8">Rugby</option>
                    <option value="9">Tenis</option>
                    <option value="10">Natation</option>
                    <option value="11">Plongeon</option>
                </select>
            </div>
            
        </div>
        
        <input type="submit" name="formsend" id="formsend" value="Soumettre">
        <!-- <div class="form-group">
            <div class="form-check3">
                <a class="btn btn-outline-secondary" href="http://localhost/Projet_Web/CompteAdmin.php" role="button">Ajouter</a> -->
            </div>
        </div>
    </form>
	<?php include 'include/creerRdv.php'?>
	<?php include 'include/footer.php'; ?>
	

</body>
</html>