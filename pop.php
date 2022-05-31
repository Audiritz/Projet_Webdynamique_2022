<!DOCTYPE html>
<html>
<head>

 <title>pop</title>
    <meta charset="uft-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">
</head>
<body>
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

 </div>
<form method="POST" action="" enctype="multipart/form-data">
    <input type="file" name="monfichier" id="monfichier" value="">
    <input type= "submit" name="chargement" value="charger le fichier">
</form>
<?php 
$image = 'img/'.$_FILES['monfichier']['name'];
echo 'img/'.$_FILES['monfichier']['name'];
print '<img src="'.$image.'">';


 ?>

</body>
</html>