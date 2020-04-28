<?php 
require 'Cocktail.php';

function getCocktails()
{
	$tab_cocktail = array();
    $dbLink = dbConnect();
    $query = 'SELECT idCocktail FROM cocktail';
    $dbResult = testError($dbLink,$query);
    while($dbRow = mysqli_fetch_assoc($dbResult))
    {
    	$test = new Cocktail($dbRow['idCocktail']);
    	//echo ($test->getNom() . " - ");
        $tab_cocktail[] =  $test;
    }
    return $tab_cocktail;
}