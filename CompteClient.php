<!DOCTYPE html>
<html>

<head>
    <title>Salles de Sport</title>
    <meta charset="uft-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="omnes.jfif"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="http://localhost/Projet_Web/Accueil.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true"> Accueil</a>
                    </li><br>
                    <li class="nav-item">
                        <a href="http://localhost/Projet_Web/toutparcourir.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true"> Tout Parcourir</a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Rendez-Vous</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Recherche</button>
                </form>
                <a href="http://localhost/Projet_Web/SeConnecter.php" class="btn active" role="button" aria-pressed="true"><img src="votrecompte.png" alt="Compte" height="150" width="150"></a>
            </div>

        </div>
    </nav>
    <div id="wrapper4admin">
        <div class="Client">
            <div class="container">
                <h2 class="display-4">Compte Client</h2>
                <p class="lead">Nom </p>
                <p class="lead">Prenom </p>
                <p class="lead">Mail</p>
                <p class="lead">Num carte etu</p>
                <p class="lead">informations bancaire :</p>
                <ul>
                    <li>
                        <span class="d-inline-block text-truncate" style="max-width: 70px;">
                            123456789
                        </span>
                    </li>
                    <li>
                        <p></p>03/26</p>
                    </li>
                    <li>
                        <p>652</p>
                    </li>
                </ul>
                <p class="lead">
                <a class="btn btn-primary btn-lg" href="http://localhost/Projet_Web/HistoriqueClients.php" role="button">Historique de commande</a>
                <a class="btn btn-primary btn-lg" href="http://localhost/Projet_Web/RdvClients.php" role="button">Liste des Rendez-vous</a>
            </p>


            </div>
        </div>
    </div>


</body>

</html>