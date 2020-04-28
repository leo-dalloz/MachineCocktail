<?php 

require 'db.php';

class Cocktail
{
	private $i_myIdCocktail;
	private $s_myNom;
	private $s_myIngredients;
	private $s_myPhraseIntro;
	private $i_myNbConsommation;

	function __construct($i_idCocktail)
	{
        $dbLink = dbConnect();
        $query = 'SELECT nom, ingredients, phraseIntro, nbConsommation FROM cocktail WHERE idCocktail = \'' . $i_idCocktail.'\'';
        $dbResult = testError($dbLink,$query);
        while($dbRow = mysqli_fetch_assoc($dbResult))
        {
        	echo "Cocktail: " . $dbRow['nom'] . " ";
            $this->s_myNom = $dbRow['nom'];
            echo ($this->s_myNom . "<br>");	
            $this->s_myIngredients =$dbRow['ingredients'];
            $this->s_myPhraseIntro = $dbRow['phraseIntro'];
            $this->i_myNbConsommation = $dbRow['nbConsommation'];
        }
        $this->i_myIdCocktail = $i_idCocktail;
	}

	public function getIdCocktail()
	{
		return $this->$i_myIdCocktail;
	}

	public function getNom()
	{
		return $this->$s_myNom;
	}

	public function getIngredients()
	{
		return $this->$s_myIngredients;
	}

	public function getPhraseIntro()
	{
		return $this->$s_myPhraseIntro;
	}

	public function getNbConsommation()
	{
		return $this->$i_myNbConsommation;
	}
}