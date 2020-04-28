<?php 
require '../model/indexM.php';

echo 'test: ';
$tab_cocktail = getCocktails();
echo count($tab_cocktail);
foreach ($tab_cocktail as $cocktail) {
	echo $cocktail->getNom();
}

 //require '../view/indexV.php';