<?php
session_start();
session_destroy();
header('Location: http://localhost/Projet_Webdynamique_2022/votre_compte.php');
  exit();
?>
