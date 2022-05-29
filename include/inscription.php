<?php


if(isset($_POST['formsend'])){
	extract($_POST);
	var_dump($_POST);

	if(!empty($mp) && !empty($cmp) && !empty($email) && !empty($prenom) && !empty($nom)&& !empty($born) && !empty($num_carte) && !empty($exp_carte) && !empty($cvv_carte)){
		if($mp==$cmp){
			$options=['cost' => 12,];
			$hashpass = password_hash($mp, PASSWORD_BCRYPT,$options);
			
			global $db;

			$c=$db->prepare("SELECT email_users FROM users WHERE email_users = :email_users");
			$c->execute(['email_users' => $email]);

			$result = $c->rowCount();

			if($result==0){
			$q= $db->prepare("INSERT INTO users(prenom_users, nom_users, naissance_users, email_users, password_users, num_carte_users, exp_carte_users, cvv_carte_users) VALUES(:prenom_users, :nom_users, :naissance_users, :email_users, :password_users, :num_carte_users, :exp_carte_users, :cvv_carte_users)");
			$q->execute([
				'prenom_users' => $prenom,
				'nom_users' => $nom,
				'naissance_users' => $born,
				'email_users'=> $email,
				'password_users'=> $hashpass,
				'num_carte_users'=> $num_carte,
				'exp_carte_users'=> $exp_carte,
				'cvv_carte_users'=> $cvv_carte

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