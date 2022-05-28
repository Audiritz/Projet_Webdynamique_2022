<?php


if(isset($_POST['cformsend'])){
	extract($_POST);
	//echo $_POST['inputEmail4'];
var_dump($_POST);
	if(!empty($inputFirstName) && !empty($inputLastName) && !empty($inputEmail4) && !empty($inputPassword4) && !empty($inputCpassword4)){
		if($inputPassword4==$inputCpassword4){
			$options=['cost' => 12,];
			$hashpass = password_hash($inputPassword4, PASSWORD_BCRYPT,$options);
			
			global $db;

			$c=$db->prepare("SELECT email FROM coachs WHERE email = :email");
			$c->execute(['email' => $inputEmail4]);

			$result = $c->rowCount();

			if($result==0){
			$q= $db->prepare("INSERT INTO coachs(nom, prenom, discipline, discipline2, email, password) VALUES(:nom, :prenom, :discipline, :discipline2, :email, :password)");
			$q->execute([
				'prenom' => $inputFirstName,
				'nom' => $inputLastName,
				'email'=> $inputEmail4,
				'password'=> $hashpass,
				'discipline'=> $specialite1,
				'discipline2'=> $specialite2


			]);
			echo "OK";
		}else{
			echo "un email existe deja";
		}
		}
		else{
			echo "champs non valides";
		}

	}
	else{
		echo "champs non remplies";
	}

}

  ?>