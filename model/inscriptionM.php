<?php 
require 'db.php';

function addUser($s_pseudo, $s_prenom, $s_nom, $s_password)
{
 	$dbLink = dbConnect();
    $query = 'SELECT username FROM user WHERE username = \'' . $s_pseudo .'\'';
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


if(isset($__POST['pseudo']) AND isset($__POST['prenom']) AND isset($__POST['nom']) AND isset($__POST['password']) AND isset($__POST['passwordVerification']))
{
	if($__POST['pseudo'] != "" AND $__POST['prenom'] != "" AND $__POST['nom'] != ""  AND $__POST['password'] != ""  AND $__POST['passwordVerification'] != "")
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
	}
	else
	{
		$obj->message = 'Il faut moins de 30 caractères par champs.';
	}
}	
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');

echo json_encode($obj);
