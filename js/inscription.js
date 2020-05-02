(function () {
	$(document).ready( function(){
		'use strict';
		$(() => {
			$('#form-login').submit(function (){
				console.log("test");
				let form = $(this);
				$('#messageErrorInscription').fadeOut();
				$.ajax({
					url: form.attr('action'),
					method: form.attr('method'),
					data: form.serialize(),
					}).done(function (data) {
						if (data.success === true){
							window.location.href = 'http://leodalloz.alwaysdata.net/controller/loginC.php';
						}
						else {
							console.log(data);
							$('#messageErrorInscription').html(data.message).fadeIn();
						}
					}).fail(function(){
						console.log(data);
						$('body').html("We have a problem Houston&nbsp;!");
					});
				return false;
			});
		})
	})
})();
