<?php 

require 'db.php';

class User
{
	private $i_myIdUser;
	private $s_myPseudo;
	private $s_myPrenom;
	private $s_myNom;
	private $s_myAdmin;

	function __construct($i_idUser)
	{
        $dbLink = dbConnect();
        $query = 'SELECT pseudo, prenom, nom, admin FROM user WHERE idUser = \'' . $i_idUser.'\'';
        $dbResult = testError($dbLink,$query);
        while($dbRow = mysqli_fetch_assoc($dbResult))
        {
            $this->s_myPseudo =$dbRow['pseudo'];
            $this->s_myPrenom = $dbRow['prenom'];
            $this->s_myNom = $dbRow['nom'];
            $this->s_myAdmin = $dbRow['admin'];
        }
        $this->i_myIdUser = $i_idUser;
	}

	public function getIdUser()
	{
		return $this->i_myIdUser;
	}

	public function getPseudo()
	{
		return $this->s_myPseudo;
	}

	public function getPrenom()
	{
		return $this->s_myPrenom;
	}

	public function getNom()
	{
		return $this->s_myNom;
	}

	public function getAdmin()
	{
		return $this->s_myAdmin;
	}

}