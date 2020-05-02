<?php
session_start();
require '../model/db.php';

$obj = new stdClass();
$obj->message = "Mauvais nom d'utilisateur ou mauvais mot de passe";
$obj->success = false;

if(isset($_POST['username']) AND isset($_POST['password']) AND $_POST['username'] != "" AND $_POST['password'] != "")
{
	$obj->test = "c cool";
	$dbLink = dbConnect();
	$query = 'SELECT idUser AS idUser, password AS password FROM user WHERE pseudo = \'' . $_POST['username'] . '\'';
	$dbResult = testError($dbLink,$query);
	if ($_POST['password'] == $dbResult['password'])
	{
		$_SESSION['user'] = $dbResult['idUser'];
    	$obj->success = true;
	}
}

header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');

echo json_encode($obj);
