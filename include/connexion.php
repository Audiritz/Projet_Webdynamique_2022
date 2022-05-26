<?php



if (isset($_POST['formlogin'])) {
	extract($_POST);
	if (!empty($email) && !empty($mp)) {

		$q=$db->prepare("SELECT * FROM users WHERE email = :email");
		$q->execute(['email' => $email]);
		
		$result = $q->fetch();
         
		//var_dump($result);

		if ($result == true) {
			//Le compte existe bien
			$hashpassword = $result['password'];
			if (password_verify($mp, $hashpassword)) {
				echo "Le mot de passe est bon";
                session_start();
				$_SESSION['email']=$result['email'];
				$_SESSION['pseudo']=$result['pseudo'];
				$_SESSION['id']=$result['id'];
				$_SESSION['password']=$result['password'];
				$_SESSION['statut']=$result['statut'];
				$_SESSION['date']=$result['date'];
				$semail= $_SESSION['email'];
				$spseudo=$_SESSION['pseudo'];
				$sid=$_SESSION['id'];
				$spassword=$_SESSION['password'];
				$statut=$_SESSION['statut'];
				$date=$_SESSION['date'];

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