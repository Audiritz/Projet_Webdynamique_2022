<?php  session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>CV foot</title>
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
        <link rel="stylesheet" href="design/CV.css">
        <?php include 'include/database.php';?>
    </head>
    <body>
        <?php include 'include/menu_nav.php';?>
        
        <br></br>

        <img class="image-CV" src="<?php
                $q=$db->prepare("SELECT * FROM coachs WHERE discipline_coachs= :discipline_coachs");
                $q->execute(['discipline_coachs' => 7]);
                $result = $q->fetch();

                echo $result['cv_coachs'];
                ?>" alt="CV">
        <?php include 'include/footer.php'; ?>
    </body>

</html>