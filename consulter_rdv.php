<?php  session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Consulter RDV</title>
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
        <?php include 'include/database.php';
        $id=$_SESSION['id_users']?> 

        <?php $q=$db->prepare("SELECT * FROM rdv WHERE id_users= :id_users");
                $q->execute(['id_users' => $id]);
                $result = $q->fetch();
        ?>
        <p class="titre">Sport : <?php echo $result['discipline_rdv']      ?></p>
        <p class="titre">Date du RDV : <?php echo $result['debut_rdv']      ?></p>
        <p class="titre">Durée du RDV : <?php echo $result['duree_rdv']      ?></p>
        <?php include 'include/footer.php'; ?>
    </body>

</html>