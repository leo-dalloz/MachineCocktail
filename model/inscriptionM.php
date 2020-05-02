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