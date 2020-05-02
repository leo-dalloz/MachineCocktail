<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/login.js"></script>
</head>

<body>
<h1 id="title">Connexion</h1>
<form id="form-login" method="post" action="../model/login.php">
    <input type="text" name="username" placeholder="username"/><br>
    <input type="password" name="password" placeholder="password"/><br>
    <button type="submit">Envoyer</button>
</form>
<div id="messages" style="display: none"></div>
</body>
</html>