<?php


if(isset($_POST['aformsend'])){
	extract($_POST);
	var_dump($_POST);

	if(!empty($amp) && !empty($acmp) && !empty($aemail) && !empty($aprenom) && !empty($anom)){
		if($amp==$acmp){
			$options=['cost' => 12,];
			$hashpass = password_hash($amp, PASSWORD_BCRYPT,$options);
			
			global $db;

			$c=$db->prepare("SELECT email_admin FROM admin WHERE email_admin = :email_admin");
			$c->execute(['email_admin' => $aemail]);

			$result = $c->rowCount();

			if($result==0){
			$q= $db->prepare("INSERT INTO admin(prenom_admin, nom_admin, email_admin, password_admin ) VALUES(:prenom_admin, :nom_admin, :email_admin, :password_admin )");
			$q->execute([
				'prenom_admin' => $aprenom,
				'nom_admin' => $anom,
				'email_admin'=> $aemail,
				'password_admin'=> $hashpass
			]);
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