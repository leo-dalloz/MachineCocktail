<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Inscription</title>
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/inscription.js"></script>
	<link rel="stylesheet"  href="../css/bootstrap.min.css">
	<link rel="stylesheet"  href="../css/loginStyle.css">
</head>

<body>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <h1>Inscription</h1>
    </div>

    <!-- Login Form -->
    <form id="form-login" method="post" action="model/inscriptionM.php">
      <input type="text" name="pseudo" class="fadeIn second" placeholder="pseudo">
      <input type="text" name="prenom" class="fadeIn second" placeholder="prénom">
      <input type="text" name="nom" class="fadeIn second" placeholder="nom">
      <input type="password" name="password" class="fadeIn third" placeholder="mot de passe">
      <input type="password" name="passwordVerification" class="fadeIn third" placeholder="vérification du mot de passe">
      <input type="submit" class="fadeIn fourth" value="Envoyer">
    </form>
    <div id="messageErrorInscription" style="display: none; color: red;"></div>

    
  </div>
</div>
</body>
</html>