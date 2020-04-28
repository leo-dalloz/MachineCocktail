
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
	
	
</head>

<body>

<?php include 'navbar.php' ?>


	<div class="jumbotron" style="height: 21rem;">
	  <h1 class="display-4" style="font-size: 4rem;">Bienvenue sur la page d'acceuil </h1>
	  <p class="lead" style="font-size: 2rem;"> Choisissez votre cocktail</p>
	</div>
	<div class="container">
		<div class="row">
			<?php foreach($tab_cocktail as $cocktail) { ?>
				<div class="card col-md-12" style="width: 18rem; margin-bottom: 5rem;">
					<? echo '<img class="card-img-top" src="../img/' . $cocktail->getNom() . '.png" alt="Card image cap">'?>
				  <div class="card-body">
				  	<?echo '<h5 class="card-title">' . $cocktail->getNom() . '</h5>' ?>
				  	<?php echo '<h6 class="card-subtitle mb-2 text-muted">' . $cocktail->getIngredients() . '</h6>' ?>
				    
				    <p class="card-text">La boisson traditionnelle du bloc.</p>
			    	<? echo '<button type="button" class="btn btn-primary btn-fabriquer" data-toggle="modal" data-target="#exampleModal" value="' . $cocktail->getNom() . '">' 
			    		. 'Fabriquer 
			    	</button>'?>
				  </div>
				</div>
			<?php } ?>
		</div>
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
	<script type="text/javascript" src="../js/script.js"></script>
</body>

<footer>
	<div id="animation-valide" class="animated bounceOutLeft" style="display: none;">
		<div class="swal2-icon swal2-success swal2-animate-success-icon" style="display: flex;">
		 	<div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
		  	<span class="swal2-success-line-tip"></span>
		  	<span class="swal2-success-line-long"></span>
			<div class="swal2-success-ring"></div> 
	   		<div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
			<div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
	  	</div>
	</div>
</footer>
</html>