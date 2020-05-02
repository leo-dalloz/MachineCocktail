<?php
session_start();

$s_username = 'test';
$s_password = 'test123';
$obj = new stdClass();
$obj->message = "Mauvais nom d'utilisateur ou mauvais mot de passe";
$obj->success = false;

if(isset($_POST['username']) && isset($_POST['password']))
{
	if($_POST['username'] == $s_username && $_POST['password'] == $s_password)
	{
	    $obj->success = true;	
	} 
    $_SESSION['user'] = 123;
}



header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');

echo json_encode($obj);
