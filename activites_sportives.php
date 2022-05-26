<?php  session_start(); ?>
<!DOCTYPE html>
<html>
    <head> 
        <title>Activités Sportives</title>
        <link rel="stylesheet" href="design/activites-sportives.css">
        
    </head>
    <body>
        <?php include 'include/menu_navigation_principal.php';?>
    <?php include 'include/menu_navigation_toutparcourir.php';?>
    <?php include 'include/menu_navigation_activitesportive.php';?>


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
                        Voir Coach &#8627;
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
                        Voir Coach &#8627;
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
                        Voir Coach &#8627;
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
                        Voir Coach &#8627;
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
                        Voir Coach &#8627;
                    </p>
                </div>

            </div>
        </div>
    </body>
</html>