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
		$s_nomCocktail = str_replace(' ', '', $_POST['cocktail']);
		$dbLink = dbConnect();
        $query = 'UPDATE cocktail SET nbConsommation = nbConsommation + 1 WHERE nom =' . $s_nomCocktail;
        testError($dbLink,$query);
 
		$var = $var . $s_nomCocktail . " ";
		fwrite($file, $var);
		header('Location: controller/indexC.php');
	}
}


