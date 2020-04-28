<?php 
require '../model/indexM.php';

$tab_cocktail = getCocktails();
foreach ($tab_cocktail as $value) 
{
	echo ($value->getNom());
}

 //require '../view/indexV.php';