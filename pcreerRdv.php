<?php  session_start(); ?> 
<!DOCTYPE html>
<html>
<head>
	<title>creer rdv</title>
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
	
	<!-- <?php include 'include/menu_navigation_principal.php';?>
	<?php include 'include/menu_navigation_moncompte.php';?> -->
	<?php include 'include/database.php'?>
	<?php include 'include/menu_nav.php';?><br><br><br><br><br><br><br>
	<h1>Créer un Rdv</h1>
	<form method="post">
        <div class="form-row">
            <div class="col">
                <label for="inputFirstName">Debut du RDV</label>
                <input type="datetime-local" class="form-control" name="debut" id="debut" placeholder="debut rdv">
            </div>
            <div class="col">
                <label for="inputLastName">Id du Coach</label>
                <input type="number" class="form-control" name="id" id="id" placeholder="Id coach">
            </div>
        </div>
        

        <div class="form-row">
            <div class="col">
                <label class="mr-sm-2" for="specialite1">Discipline</label>
                <select class="custom-select mr-sm-2" name="discipline" id="discipline">
                    <option selected>Choose...</option>
                    <option value="Muscu">Musculation</option>
                    <option value="Fitness">Fitness</option>
                    <option value="Biking">Biking</option>
                    <option value="Cardio">Cardio-Training</option>
                    <option value="Cours collectifs">Cours collectif</option>
                    <option value="Basketball">Basketball</option>
                    <option value="Football">Football</option>
                    <option value="Rugby">Rugby</option>
                    <option value="Tennis">Tennis</option>
                    <option value="Natation">Natation</option>
                    <option value="Plongeon">Plongeon</option>
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
	<?php include 'include/creerRdv.php';?>
	<?php include 'include/footer.php'; ?>
	

</body>
</html>