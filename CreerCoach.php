<!DOCTYPE html>
<html>

<head>
    <title>Connexion</title>
    <meta charset="uft-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'include/database.php'?>
    <a href="#"><img src="omnes.jfif"></a>
    <h1>Ajouter un coach</h1>
    <br>
    <br>
    <form method="post">
        <div class="form-row">
            <div class="col">
                <label for="inputFirstName">Prenom Coach</label>
                <input type="text" class="form-control" name="inputFirstName" id="inputFirstName" placeholder="Prenom">
            </div>
            <div class="col">
                <label for="inputLastName">Nom Coach</label>
                <input type="text" class="form-control" name="inputLastName" id="inputLastName" placeholder="Nom">
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" name="inputEmail4"id="inputEmail4" placeholder="Email">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Mot de passe</label>
            <input type="password" class="form-control" name="inputPassword4" id="inputPassword4" placeholder="Mot de passe">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Confirmation mot de passe</label>
            <input type="password" class="form-control" name="inputCpassword4" id="inputCpassword4" placeholder="Mot de passe">
        </div>
         <div class="form-group col-md-6">
            <label for="inputPassword4">Téléphone</label>
            <input type="number" class="form-control" name="tel" id="tel" placeholder="tel">
        </div>
        </div>

        <div class="form-row">
            <div class="col">
                <label class="mr-sm-2" for="specialite1">Specialite 1</label>
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
            <div class="col">
                <label class="mr-sm-2" for="specialite2">Specialite 2</label>
                <select class="custom-select mr-sm-2" name="specialite2" id="specialite2">
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
                    <option value="12">-Pas d'autre Specialite-</option>
                </select>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="inputphoto">Url photo</label>
            <input type="text" class="form-control" name="inputphoto" id="inputPhoto" placeholder="Photo">
        </div>
        <input type="submit" name="cformsend" id="cformsend" value="Soumettre">
        <!-- <div class="form-group">
            <div class="form-check3">
                <a class="btn btn-outline-secondary" href="http://localhost/Projet_Web/CompteAdmin.php" role="button">Ajouter</a> -->
            </div>
        </div>
    </form>
    <?php include 'include/cinscription.php'; ?>

</body>
