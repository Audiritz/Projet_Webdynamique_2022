<?php



if (isset($_POST['formlogin'])) {
	extract($_POST);
	if (!empty($email) && !empty($mp)) {

		$q=$db->prepare("SELECT * FROM users WHERE email_users = :email_users");
		$q->execute(['email_users' => $email]);
		
		$result = $q->fetch();
		
		//var_dump($result);

		if ($result == true) {
			//Le compte existe bien
			$hashpassword = $result['password_users'];
			if (password_verify($mp, $hashpassword)) {
				echo "Le mot de passe est bon";
				
				
				$_SESSION['email_users']=$result['email_users'];
				$_SESSION['prenom_users']=$result['prenom_users'];
				$_SESSION['id_users']=$result['id_users'];
				$_SESSION['password_users']=$result['password_users'];
				$_SESSION['nom_users']=$result['nom_users'];
				$_SESSION['naissance_users']=$result['naissance_users'];
				$_SESSION['cvv_carte_users']=$result['cvv_carte_users'];
				$_SESSION['exp_carte_users']=$result['exp_carte_users'];
				$_SESSION['num_carte_users']=$result['num_carte_users'];
				$_SESSION['date_users']=$result['date_users'];
				$_SESSION['uopen_users']=true;
				
				header('Location: http://localhost/Projet_Webdynamique_2022/CompteClient.php');
  exit();


			}
			else
			{
				echo "le mot de passe n'est pas correct";

			}
		}
		else
		{
			echo "Le compte portant l'email ".$email." n'existe pas";
		}
	}
	else
	{
		echo "veuillez compléter l'ensemble des champs";
	}
}
?>