
<?php 
$tab_cocktail = getCocktails(); 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title>Cocktail</title>
	<!-- CSS -->
	<link rel="stylesheet"  href="../css/bootstrap.min.css">
	<link rel="stylesheet"  href="../css/style.css">
	<script src="https://kit.fontawesome.com/799c725346.js" crossorigin="anonymous"></script>
</head>

<body>
	<!-- Navbar -->
	<?php include 'navbar.php' ?>

	<!-- Bandeau de la plage -->
	<div class="jumbotron" style="height: 21rem;">
	  <h1 class="display-4" style="font-size: 4rem;">Bienvenue sur la page d'acceuil </h1>
	  <p class="lead" style="font-size: 2rem;"> Choisissez votre cocktail</p>
	</div>
	<!-- Liste cocktail -->
	<div class="container">
		<div class="row">
			<?php foreach($tab_cocktail as $cocktail) { ?>
				<div class="card col-md-12" style="width: 18rem; margin-bottom: 5rem;">
					<? echo '<img class="card-img-top" src="../img/' . $cocktail->getNom() . '.png" alt="Card image cap">'?>
				  	<div class="card-body">
				  	<?echo '<h5 class="card-title">' . $cocktail->getNom() . '</h5>' ?>
				  	<?php echo '<h6 class="card-subtitle mb-2 text-muted">' . $cocktail->getIngredients() . '</h6>' ?>
				    <?php echo '<p class="card-text">' . $cocktail->getPhraseIntro() . '</p>' ?>
			    	<? echo '<button type="button" class="btn btn-primary btn-fabriquer" data-toggle="modal" data-target="#exampleModal" value="' . $cocktail->getNom() . '">' 
			    		. 'Fabriquer 
			    	</button>'?>
			    	<?php echo '<a>' . $cocktail->getNbConsommation() . '</a>' ?>
			    	<i class="fas fa-cocktail"></i>
				  </div>
				</div>
			<?php } ?>
		</div>
	</div>
	<!-- Animation valide -->

	  	<div class="check-icon">
		    <span class="icon-line line-tip"></span>
		    <span class="icon-line line-long"></span>
		    <div class="icon-circle"></div>
		    <div class="icon-fix"></div>
	  	</div>

	<!-- Modal -->
	<div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Êtes-vous sûr ?</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        Êtes-vous sûr de vouloir fabriquer ce cocktail ?
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Non</button>
	        <button type="button" class="btn btn-primary btn-fabriquer-ok" data-dismiss="modal">Oui</button>
	      </div>
	    </div>
	  </div>
	</div>



	<script src="../js/jquery-3.4.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/script.js"></script>
</body>
</html>