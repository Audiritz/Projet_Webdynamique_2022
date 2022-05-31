<?php


if(isset($_POST['cformsend'])){
	extract($_POST);
	//echo $_POST['inputEmail4'];
//var_dump($_POST);
	if(!empty($inputFirstName) && !empty($inputLastName) && !empty($inputEmail4) && !empty($inputPassword4) && !empty($inputCpassword4)){
		if($inputPassword4==$inputCpassword4){
			$options=['cost' => 12,];
			$hashpass = password_hash($inputPassword4, PASSWORD_BCRYPT,$options);
			
			global $db;

			$c=$db->prepare("SELECT email_coachs FROM coachs WHERE email_coachs = :email_coachs");
			$c->execute(['email_coachs' => $inputEmail4]);

			$result = $c->rowCount();

			if($result==0){
			$q= $db->prepare("INSERT INTO coachs(nom_coachs, prenom_coachs, discipline_coachs, discipline2_coachs, email_coachs, password_coachs, pp_coachs, tel_coachs, cv_coachs) VALUES(:nom_coachs, :prenom_coachs, :discipline_coachs, :discipline2_coachs, :email_coachs, :password_coachs, :pp_coachs, :tel_coachs, :cv_coachs)");
			$q->execute([
				'prenom_coachs' => $inputFirstName,
				'nom_coachs' => $inputLastName,
				'email_coachs'=> $inputEmail4,
				'password_coachs'=> $hashpass,
				'discipline_coachs'=> $specialite1,
				'discipline2_coachs'=> $specialite2,
				'pp_coachs'=> $inputphoto,
				'tel_coachs'=>$tel,
				'cv_coachs'=>$cv


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