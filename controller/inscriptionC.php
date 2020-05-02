<?php 

require '../view/inscriptionV.php';
require '../model/inscriptionM.php';


if(!empty($_POST)){
	$obj = new stdClass();
	$obj->message = "";
	$obj->success = false;
	if(isset($__POST['pseudo']) AND isset($__POST['prenom']) AND isset($__POST['nom']) AND isset($__POST['password']) AND isset($__POST['passwordVerification']) AND
			 $__POST['pseudo'] != "" AND $__POST['prenom'] != "" AND $__POST['nom'] != ""  AND $__POST['password'] != ""  AND $__POST['passwordVerification'] != "")
	{
		if(count($__POST['pseudo']) > 30 OR count($__POST['prenom']) > 30 OR count($__POST['nom']) > 30 OR count($__POST['password']) > 30)
		{
			if($__POST['password'] == $__POST['passwordVerification'])
			{
				if ( addUser($__POST['pseudo'], $__POST['prenom'], $__POST['nom'], $__POST['password']))
				{
					$obj->success = true;
				}
				else
				{
					$obj->message = 'Pseudo déjà utilisé';
				}
			}
			else
			{
				$obj->message = 'Les deux mots de passe ne correspondent pas';
			}
		}
		else
		{
			$obj->message = 'Il faut moins de 30 caractères par champs.';
		}
	}
	else
	{
		$obj->message = 'Veuillez remplir tous les champs.';
	}
	
	header('Cache-Control: no-cache, must-revalidate');
	header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
	header('Content-type: application/json');

	echo json_encode($obj);
}

