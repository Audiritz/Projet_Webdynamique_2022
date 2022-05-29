<?php



if (isset($_POST['formlogin'])) {
	extract($_POST);
	if (!empty($email) && !empty($mp)) {

		$q=$db->prepare("SELECT * FROM admin WHERE email_admin = :email_admin");
		$q->execute(['email_admin' => $email]);
		
		$result = $q->fetch();
		
		//var_dump($result);

		if ($result == true) {
			//Le compte existe bien
			$hashpassword = $result['password_admin'];
			if (password_verify($mp, $hashpassword)) {
				//echo "Le mot de passe est bon";
				
				
				$_SESSION['email_admin']=$result['email_admin'];
				$_SESSION['prenom_admin']=$result['prenom_admin'];
				$_SESSION['id_admin']=$result['id_admin'];
				$_SESSION['password_admin']=$result['password_admin'];
				$_SESSION['nom_admin']=$result['nom_admin'];
				$_SESSION['open_admin']=true;

				
				header('Location: http://localhost/Projet_Webdynamique_2022/votre_compte.php');
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