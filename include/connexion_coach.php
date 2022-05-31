<?php



if (isset($_POST['cformlogin'])) {
	extract($_POST);
	if (!empty($email) && !empty($mp)) {

		$q=$db->prepare("SELECT * FROM coachs WHERE email_coachs = :email_coachs");
		$q->execute(['email_coachs' => $email]);
		
		$result = $q->fetch();
         
		//var_dump($result);

		if ($result == true) {
			//Le compte existe bien
			$hashpassword = $result['password_coachs'];
			if (password_verify($mp, $hashpassword)) {
				/*echo "Le mot de passe est bon";*/
				
				$_SESSION['email_coachs']=$result['email_coachs'];
				$_SESSION['prenom_coachs']=$result['prenom_coachs'];
				$_SESSION['id_coachs']=$result['id_coachs'];
				$_SESSION['password_coachs']=$result['password_coachs'];
				$_SESSION['nom_coachs']=$result['nom_coachs'];
				$_SESSION['discipline_coachs']=$result['discipline_coachs'];
				$_SESSION['discipline2_coachs']=$result['discipline2_coachs'];
				$_SESSION['pp_coachs']=$result['pp_coachs'];
				$_SESSION['cv_coachs']=$result['cv_coachs'];

				$_SESSION['open_coachs']=true;

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