<?php
session_start();
session_destroy();
echo 'You have been logged out. <a href="http://localhost/Projet_Webdynamique_2022/votre_compte.php">Go back</a>';