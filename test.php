<?php 
 header("Access-Control-Allow-Origin: *");
require 'model/db.php';

if(isset($_POST['test']))
{
	$var = file_get_contents("ListeCocktail.txt");
	$file = fopen("ListeCocktail.txt", "wb");
	$test = $_POST['test'];

	if( $test == 1)
	{
		$var = explode(" ", $var);
		echo($var[0]);
		array_shift($var);
		fwrite($file, implode(" ", $var));
	}

	else if( $test == 0 AND isset($_POST['cocktail']) AND $_POST['cocktail'] != "")
	{
		$dbLink = dbConnect();
        $query = "UPDATE cocktail SET nbConsommation = nbConsommation + 1 WHERE nom = '$_POST['cocktail']'";
        testError($dbLink,$query);
 
		$var = $var . str_replace(' ', '', $_POST['cocktail']) . " ";
		fwrite($file, $var);
		header('Location: controller/indexC.php');
	}
}


