<?php  session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
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
</head>
<body>
	Inscription
	<?php include 'include/menu_navigation_principal.php';?>
	<?php include 'include/menu_navigation_moncompte.php';?>
    <?php include 'include/database.php'?>
    <?php include 'include/menu_nav.php';?>
    <form method="post">
        <table>
            <h3>Coachs</h3>
            <tr>
                <td>Nom:</td>
                <td><input type="text" step="0.01" name="cnom" id="cnom"></td>
            </tr>

            <tr>
                <td>Prénom:</td>
                <td><input type="text" step="0.01" name="cprenom" id="cprenom"></td>
            </tr>

            <tr>
                <td>Email:</td>
                <td><input type="email" step="0.01" name="cemail" id="cemail"></td>
            </tr>

            
            <tr>
                <td>Mot de passe:</td>
                <td><input type="password" step="0.01" name="mp" id="mp"></td>
            </tr>

            <tr>
                <td>Confirmation mot de passe:</td>
                <td><input type="password" step="0.01" name="cmp" id="cmp"></td>
            </tr>
            <tr>
                <td>Spécialité:</td>
                <td>
                    <input type="radio" name="spe" id="spe" value="muscu">muscu<br>
                    <input type="radio" name="spe" id="spe"  value="cardio">Cardio-Training <br>
                    <input type="radio" name="spe" id="spe"  value="fitness">Fitness <br>
                    <input type="radio" name="spe" id="spe" value="biking">Biking <br>
                    <input type="radio" name="spe" id="spe"  value="basket">Basketball <br>
                    <input type="radio" name="spe" id="spe"  value="foot">Football<br>
                    <input type="radio" name="spe" id="spe" value="natation">Natation<br>
                    <input type="radio" name="spe" id="spe"  value="plongeon">Plongeon <br>
                    <input type="radio" name="spe" id="spe"  value="tennis">Tennis <br>
                    <input type="radio" name="spe" id="spe"  value="rugby">Rugby <br>
                    <input type="radio" name="spe" id="spe"  value="cours_co">Cours collectif<br>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="cformsend" id="cformsend" value="Soumettre">
                </td>
            </tr>
        </table>
       




 </div>
<form method="POST" action="" enctype="multipart/form-data">
    <input type="file" name="monfichier" id="monfichier" value="">
    <input type= "submit" name="chargement" value="charger le fichier">
</form>
 <?php
if(isset($_POST) && !empty($_POST)){

    var_dump($_FILES);

    if($_FILES['monfichier']['error'] == 0){
        ?> <pre><?php print_r($_POST) ?> </pre> <?php
        
        //test taille
        if($_FILES['monfichier']['size'] > 1500000){
            $error = "Votre fichier est trop lourd.";
        }
        
        // test extension
        $extension = strrchr($_FILES['monfichier']['name'],'.');
        if($extension != '.jpg'){
            $error = "Votre fichier n'est pas conforme.";
        }

        // au final :
        if(!isset($error)){
            move_uploaded_file($_FILES['monfichier']['tmp_name'], 'img/'.$_FILES['monfichier']['name']);
            echo "le fichier est chargé";
        }


    }else{
        $error = "problème formulaire";
    }
}

?>




<div style="color:red">
 
<?php 
if(isset($error)) 
{
  echo $error; 
}
  ?>
<?php 
$image = 'img/'.$_FILES['monfichier']['name'];
echo 'img/'.$_FILES['monfichier']['name'];
print '<img src="'.$image.'">';

?>
    
         
    </form>
    <?php include 'include/cinscription.php'?>
    <?php include 'include/footer.php'; ?>
</body>
</html>