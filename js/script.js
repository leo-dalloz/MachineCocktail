(function(){

	$(document).ready( function(){
		$(".btn-fabriquer").click(function(){
			var cocktailName = this.value;
			console.log(cocktailName);
		})
		$(".btn-fabriquer-ok").click(function(){
			console.log(cocktailName);
			var xhr = new XMLHttpRequest();
			xhr.open('POST', 'http://leodalloz.alwaysdata.net/test.php');
			xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
			xhr.send('test=0&cocktail=' + cocktailName);

			$("#animation-valide").show();
			setTimeout(function(){
				$("#animation-valide").hide("slow");
			}, 2000);
		})
	});


}) ();