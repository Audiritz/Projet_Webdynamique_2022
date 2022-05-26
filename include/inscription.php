<?php


if(isset($_POST['formsend'])){
	extract($_POST);

	if(!empty($mp) && !empty($cmp) && !empty($email) && !empty($pseudo) && !empty($statut)){
		if($mp==$cmp){
			$options=['cost' => 12,];
			$hashpass = password_hash($mp, PASSWORD_BCRYPT,$options);
			
			global $db;

			$c=$db->prepare("SELECT email FROM users WHERE email = :email");
			$c->execute(['email' => $email]);

			$result = $c->rowCount();

			if($result==0){
			$q= $db->prepare("INSERT INTO users(pseudo, email, password, statut) VALUES(:pseudo,:email,:password,:statut)");
			$q->execute([
				'pseudo' => $pseudo,
				'email' => $email,
				'password' => $hashpass,
				'statut'=> $statut
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