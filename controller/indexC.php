<?php 
require '../model/indexM.php';

echo 'test: ';
$tab_cocktail = getCocktails();
foreach ($tab_cocktail as $cocktail) {
	echo $cocktail->getNom();
}

 //require '../view/indexV.php';