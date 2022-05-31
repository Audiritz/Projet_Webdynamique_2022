<?php  session_start(); ?>
<!DOCTYPE html>
<html>
    <?php include 'include/database.php';?> 
    <?php
    $q=$db->prepare("SELECT * FROM coachs WHERE discipline_coachs= :discipline_coachs");
            $q->execute(['discipline_coachs' => 1]);
    $result = $q->fetch();

    echo $result['nom_coachs'];
    ?>
</html>