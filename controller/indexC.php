<?php 
require '../model/indexM.php';

echo 'test: ';
$tab_cocktail = getCocktails();
echo tab[0].getNom();
foreach ($tab_cocktail as $cocktail) {
	echo $cocktail->getNom();
}

 //require '../view/indexV.php';