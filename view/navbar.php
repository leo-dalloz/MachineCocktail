	<!-- En-tete -->
	<nav class="navbar navbar-expand navbar-light bg-light" style="height: 5rem;">
  <a class="navbar-brand" href="../controller/indexC.php" style="font-size: 4rem;">Home</a>
  <div class="collapse navbar-collapse" id="navbarColor03">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="../controller/profileC.php" style="font-size: 3rem;">Profil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="font-size: 3rem;">Classement</a>
      </li>
      <?php 
      if($_SESSION['user']->getAdmin())
      {
      ?>
        <li class="nav-item">
          <a class="nav-link" href="#" style="font-size: 3rem;">Admin</a>
        </li>
        <?php 
      }
      ?>
    <li class="nav-item" id="deconnexion"></li>
    </ul>
  </div>
</nav>


	<!-- Fin en-tete -->
