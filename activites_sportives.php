<?php  session_start(); ?>
<!DOCTYPE html>
<html>
    <head> 
        <title>Activités Sportives</title>
        <meta charset="uft-8" />
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
	    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
	    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
	    crossorigin="anonymous"></script>

	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
	    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
	    crossorigin="anonymous"></script>
        <link rel="stylesheet" href="design/activites-sportives.css">
        <link rel="stylesheet" href="design/style.css">
        
    </head>
    <body>
        <?php include 'include/menu_navigation_principal.php';?>
        <?php include 'include/menu_navigation_toutparcourir.php';?>
        <?php include 'include/menu_navigation_activitesportive.php';?>

        <?php include 'include/menu_nav.php';?>


        <div class="activite-grid1">
            <div class="activite">
                <div class="image-row">
                    <img class="image-activite" src="img/Musculation.jpg" alt="Musculation">
                </div>
                <div class="description-row">
                    <p class="nom-activite">
                        Musculation
                    </p>
                    <p class="button-coach">
                        <a href="muscu.php">Voir Coach &#8627;</a>
                    </p>
                </div>
            </div>
            
            <div class="activite">
                <div class="image-row">
                    <img class="image-activite" src="img/Fitness.jpg" alt="Fitness">
                </div>
                <div class="description-row">
                    <p class="nom-activite">
                        Fitness
                    </p>
                    <p class="button-coach">
                        <a href="fitness.php">Voir Coach &#8627;</a>
                    </p>
                </div>
            </div>

            <div class="activite">
                <div class="image-row">
                    <img class="image-activite" src="img\Biking.jpg" alt="Biking">
                </div>
                <div class="description-row">
                    <p class="nom-activite">
                        Biking
                    </p>
                    <p class="button-coach">
                        <a href="biking.php">Voir Coach &#8627;</a>
                    </p>
                </div>
            </div>
        </div>



        <div class="activite-grid2">
            <div class="activite">
                <div class="image-row">
                    <img class="image-activite" src="img\Cardio.jpeg" alt="Cardio-Training">
                </div>
                <div class="description-row">
                    <p class="nom-activite">
                        Cardio-Training
                    </p>
                    <p class="button-coach">
                        <a href="cardio.php">Voir Coach &#8627;</a>
                    </p>
                </div>
            </div>

            <div class="activite">
                <div class="image-row">
                    <img class="image-activite" src="img/Cours Collectifs.jpg" alt="Cours Collectifs">
                </div>
                <div class="description-row">
                    <p class="nom-activite">
                        Cours Collectifs
                    </p>
                    <p class="button-coach">
                        <a href="cours_collectifs.php">Voir Coach &#8627;</a>
                    </p>
                </div>

            </div>
        </div>
        <?php include 'include/footer.php'; ?>
    </body>
</html>