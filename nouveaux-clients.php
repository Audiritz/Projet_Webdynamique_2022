<?php  session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>nouveaux-clients</title>
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
        <link rel="stylesheet" href="design/infos-gym.css">
    </head>
    <body>
        <?php include 'include/menu_nav.php';?>
        <?php include 'include/database.php';?>
        <p>
            <p class="titre">NOUVEAUX CLIENTS</p>
            <p class="text">
                <?php
                    $statement=$db->prepare("SELECT * FROM users ORDER BY id_users DESC LIMIT 1");
                    $statement->execute();
                    $result = $statement->fetch();

                    echo $result['prenom_users'];
                ?>
                <?php  
                    echo $result['nom_users'];   
                ?>   
            </p>
        </p>
        <?php include 'include/footer.php'; ?>
    </body>

</html>