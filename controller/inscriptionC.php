<?php 

require '../view/inscriptionV.php';
require '../model/inscriptionM.php';

if(!empty($_POST)){
	if(isset($__POST['pseudo']) AND isset($__POST['prenom']) AND isset($__POST['nom']) AND isset($__POST['password']) AND isset($__POST['passwordVerification']) AND
			 $__POST['pseudo'] != "" AND $__POST['prenom'] != "" AND $__POST['nom'] != ""  AND $__POST['password'] != ""  AND $__POST['passwordVerification'] != "")
	{
		if(count($__POST['pseudo']) > 30 OR count($__POST['prenom']) > 30 OR count($__POST['nom']) > 30 OR count($__POST['password']) > 30)
		{
			if($__POST['password'] == $__POST['passwordVerification'])
			{
				$reponse = addUser($__POST['pseudo'], $__POST['prenom'], $__POST['nom'], $__POST['password']);
				if ( $reponse == 'ok')
				{
					header("Location: loginC.php");
				}
				else
				{
					return $reponse;
				}
			}
			else
			{
				return 'Les deux mots de passe ne correspondent pas';
			}
		}
		else
		{
			return 'Il faut moins de 30 caractères par champs.';
		}
	}
	else
	{
		return 'Veuillez remplir tous les champs.';
	}
}