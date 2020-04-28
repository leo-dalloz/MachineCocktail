<?php 
require 'Cocktail.php';

function getCocktails()
{
	$tab_cocktail = array();
    $dbLink = dbConnect();
    $query = 'SELECT idCocktail FROM cocktail ORDER BY nbConsommation DESC';
    $dbResult = testError($dbLink,$query);
    while($dbRow = mysqli_fetch_assoc($dbResult))
    {
    	echo $dbRow['idCocktail'] . " ";
        $tab_cocktail[] =  new Cocktail($dbRow['idCocktail']);
    }
    return $tab_cocktail;
}