(function(){

	$(document).ready( function(){
		$(".check-icon").hide();
		var cocktailName = ""
		$(".btn-fabriquer").click(function(){
			cocktailName = this.value;
		})
		$(".btn-fabriquer-ok").click(function(){
			var xhr = new XMLHttpRequest();
			xhr.open('POST', 'http://leodalloz.alwaysdata.net/test.php');
			xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
			xhr.send('test=0&cocktail=' + cocktailName);

			$(".check-icon").show();
			setTimeout(function(){
				$(".check-icon").hide("slow");
				window.location.reload();
			}, 5000);
		})
	});


}) ();