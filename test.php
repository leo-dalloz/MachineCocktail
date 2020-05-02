<?php 
 header("Access-Control-Allow-Origin: *");
require 'model/db.php';

if(isset($_POST['test']))
{
	
	$test = $_POST['test'];

	if( $test == 1)
	{
		$var = file_get_contents("ListeCocktail.txt");
		$file = fopen("ListeCocktail.txt", "wb");
		$var = explode(" ", $var);
		echo($var[0]);
		array_shift($var);
		fwrite($file, implode(" ", $var));
	}

	else if( $test == 2)
	{
		$var = file_get_contents("admin.txt");
		$file = fopen("admin.txt", "wb");
		$var = explode(" ", $var);
		echo($var[0]);
		array_shift($var);
		fwrite($file, implode(" ", $var));
	}

	else if( $test == 0 AND isset($_POST['cocktail']) AND $_POST['cocktail'] != "")
	{
		$var = file_get_contents("ListeCocktail.txt");
		$file = fopen("ListeCocktail.txt", "wb");
		$s_nomCocktail =  $_POST['cocktail'];
		$dbLink = dbConnect();
        $query = "UPDATE cocktail SET nbConsommation = nbConsommation + 1 WHERE nom = '$s_nomCocktail'";
        testError($dbLink,$query);
 
		$var = $var . str_replace(' ', '', $_POST['cocktail']) . " ";
		fwrite($file, $var);
		header('Location: controller/indexC.php');
	}

	else if( $test == 3)
	{
		$var = file_get_contents("admin.txt");
		$file = fopen("admin.txt", "wb");
		$dbLink = dbConnect();
		$var = $var . str_replace(' ', '', $_POST['cocktail']) . " ";
		fwrite($file, $var);
	}



}


