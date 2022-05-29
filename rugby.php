<?php  session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
    <title>Coach</title>

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
    <link rel="stylesheet" href="design/coach.css">

    </head>
    <body>

        <?php include 'include/menu_navigation_principal.php';?>
        <?php include 'include/menu_nav.php';?>
        <?php include 'include/database.php';?>

        <div class="coach-grid">

            <div class="coach-image-row">
                <img class="image-coach" src="img/votrecompte.png" alt="coach">
            </div>

            <div class="description-grid">
                <div class="info-coach">
                    
                    <?php
                    $q=$db->prepare("SELECT * FROM coachs WHERE discipline_coachs= :discipline_coachs");
                    $q->execute(['discipline_coachs' => 8]);
                    $result = $q->fetch();

                    echo $result['nom_coachs'];
					?>
					<?php
					$q=$db->prepare("SELECT * FROM coachs WHERE discipline_coachs= :discipline_coachs");
                    $q->execute(['discipline_coachs' => 8]);
                    $result = $q->fetch();

                    echo $result['prenom_coachs'];
                    ?>
                    
                    
                </div>
                <div class="info-coach">
                    <p>Coach de rugby</p>
                </div>
                <div class="info-coach">
                    <p>Salle : G-109</p>
                </div>
                <div class="info-coach">
                    <p>Téléphone : <?php
                    $q=$db->prepare("SELECT * FROM coachs WHERE discipline_coachs= :discipline_coachs");
                    $q->execute(['discipline_coachs' => 8]);
                    $result = $q->fetch();

                    echo $result['tel_coach'];
                    ?> </p>    
                </div>
                <div class="info-coach">
                    <p>Email : <?php
                    $q=$db->prepare("SELECT * FROM coachs WHERE discipline_coachs= :discipline_coachs");
                    $q->execute(['discipline_coachs' => 8]);
                    $result = $q->fetch();

                    echo $result['email_coachs'];
                    ?></p>
                </div>
            
                <div class="button-grid">
                    <div class="button">
                        <a href="" class="text-button">Voir CV</a>
                    </div>
                    <div class="button">
                        <a href="" class="text-button">Prendre rendez-vous</a>
                    </div>
                    <div class="button">
                        <a href="" class="text-button">Chat</a>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <img class="image-edt" src="img/edt.png" alt="edt">
        </div>
        <?php include 'include/footer.php'; ?>
        
</html>