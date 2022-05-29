<?php


if(isset($_POST['formsend'])){
	extract($_POST);
	//echo $_POST['inputEmail4'];
var_dump($_POST);
	if(!empty($debut) && !empty($discipline) && !empty($id)){
		
			
			global $db;

			$c=$db->prepare("SELECT debut_rdv FROM rdv WHERE id_coachs = :id_coachs");
			$c->execute(['id_coachs' => $id]);

			$result = $c->rowCount();

			if($result==0){
			$q= $db->prepare("INSERT INTO rdv(debut_rdv, discipline_rdv, id_users, id_coachs) VALUES(:debut_rdv, :discipline_rdv, :id_users, :id_coachs)");
			$q->execute([
				'debut_rdv' => $debut,
				'discipline_rdv'=> $discipline,
				'id_users'=> $_SESSION['id_users'],
				'id_coachs'=> $id


			]);
			echo "OK";
		}else{
			echo "le coach a déjà un rendez-vous !";
		}
		

	}
	else{
		echo "champs non remplies";
	}

}

  ?>