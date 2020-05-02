<?php 
require 'db.php';

function addUser($s_pseudo, $s_prenom, $s_nom, $s_password)
{
 	$dbLink = dbConnect();
    $query = 'SELECT pseudo FROM user WHERE pseudo = \'' . $s_pseudo .'\'';
    $dbResult = testError($dbLink,$query);
    $rows = $statement->fetchAll();
    if(count($rows) == 0)
    {
    	$query =    'INSERT INTO user (pseudo, prenom, nom, password)
                    VALUES (\'' . $s_pseudo . '\',
                            \'' . $s_prenom . '\',
                            \'' . $s_nom 	. '\',
                            \'' . password_hash($s_password, PASSWORD_DEFAULT) . '\')';
        testError($dbLink,$query);
        return true;
    }
}

$obj = new stdClass();
$obj->message = 'Veuillez remplir tous les champs.';
$obj->success = false;


if(isset($_POST['pseudo']) AND isset($_POST['prenom']) AND isset($_POST['nom']) AND isset($_POST['password']) AND isset($_POST['passwordVerification']))
{
	$s_pseudo 				= $_POST['pseudo'];
	$s_prenom				= $_POST['prenom'];
	$s_nom 	  				= $_POST['nom'];
	$s_password 			= $_POST['password'];
	$s_passwordVerification = $_POST['passwordVerification'];
	if($s_pseudo != "" OR $s_prenom != "" OR $s_nom != ""  OR $s_password != ""  OR $s_passwordVerification != "")
	{
		if(strlen($s_pseudo) < 30 OR strlen($s_prenom) < 30 OR strlen($s_nom) < 30 OR strlen($s_password) < 30)
		{
			if($s_password == $s_passwordVerification)
			{
				if ( addUser($s_pseudo, $s_prenom, $s_nom, $s_password))
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
}	
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');

echo json_encode($obj);
