<?php


if(isset($_POST['formsend'])){
	extract($_POST);

	if(!empty($mp) && !empty($cmp) && !empty($email) && !empty($prenom) && !empty($nom)&& !empty($born) && !empty($num_carte) && !empty($exp_carte) && !empty($cvv_carte)){
		if($mp==$cmp){
			$options=['cost' => 12,];
			$hashpass = password_hash($mp, PASSWORD_BCRYPT,$options);
			
			global $db;

			$c=$db->prepare("SELECT email FROM users WHERE email = :email");
			$c->execute(['email' => $email]);

			$result = $c->rowCount();

			if($result==0){
			$q= $db->prepare("INSERT INTO users(prenom, nom, naissance, email, password, num_carte, exp_carte, cvv_carte) VALUES(:prenom, :nom, :naissance, :email, :password, :num_carte, :exp_carte, :cvv_carte)");
			$q->execute([
				'prenom' => $prenom,
				'nom' => $nom,
				'naissance' => $born,
				'email'=> $email,
				'password'=> $hashpass,
				'num_carte'=> $num_carte,
				'exp_carte'=> $exp_carte,
				'cvv_carte'=> $cvv_carte

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