<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/login.js"></script>
	<link rel="stylesheet"  href="../css/bootstrap.min.css">
	<link rel="stylesheet"  href="../css/loginStyle.css">
</head>

<body>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <h1>Connexion</h1>
    </div>

    <!-- Login Form -->
    <form id="form-login" method="post" action="../model/login.php">
      <input type="text" name="username" id="login" class="fadeIn second" placeholder="pseudo">
      <input type="password" name="password" id="password" class="fadeIn third" placeholder="mot de passe">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>
    <div id="messages" style="display: none; color: red;"></div>

    <!-- Remind Passowrd && account -->
    <div id="formFooter">
    	<a>Vous n'avez pas de compte:</a>
    	<a class="underlineHover" href="#">inscrivez-vous</a> <br>
      	<a class="underlineHover" href="#">Mot de passe oublié ?</a>
    </div>

  </div>
</div>
<!--
<h1 id="title">Connexion</h1>
<form id="form-login" method="post" action="../model/login.php">
    <input type="text" name="username" placeholder="username"/><br>
    <input type="password" name="password" placeholder="password"/><br>
    <button type="submit">Envoyer</button>
</form>
<div id="messages" style="display: none"></div>
-->
</body>
</html>