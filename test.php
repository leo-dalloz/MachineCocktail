<?php 
if (isset($_POST('test')))
{
	$test = $_POST('test');
	$var = file_get_contents("ListeCocktail.txt");

	if( $test == 1)
	{
		$var = explode(" ", $var);
		echo($var[0]);
		array_shift($var);
		$file = fopen("ListeCocktail.txt", "wb");
		fwrite($file, implode(" ", $var));
	}

	else if( $test == 0 && isset($_POST('cocktail')))
	{
		$var = $var . $_POST('cocktail')
	}
}


 ?>