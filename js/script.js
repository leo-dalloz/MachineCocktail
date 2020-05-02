(function(){
'use strict';
    $(() => {
        $.ajax({
            url: 'http://leodalloz.alwaysdata.net/model/is_connected.php',
            method: 'get'
        }).done(function (data) {
            if (data) {
                /* le user est connecté */
                $('#deconnexion').append(
                    $('<button />')
                        .html('Déconnexion')
                        .on('click', function () {
                            $.ajax({
                                url: 'http://leodalloz.alwaysdata.net/model/logout.php',
                                method: 'get'
                            }).done(function () {
                                window.location.href = 'http://leodalloz.alwaysdata.net/controller/loginC.php';
                            });
                        })
                );
            } else {
                /* le user n'est pas connecté */
                window.location.href = 'http://leodalloz.alwaysdata.net/controller/loginC.php';
            }
        }).fail(function () {
            $('body').html('Une erreur critique est arrivée.');
        });
    });

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
				document.location.reload(true);
			}, 2000);
		})
	});


}) ();