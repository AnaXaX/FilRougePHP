$('body').vegas({
  overlay: false,
  transition: 'fade', 
  transitionDuration: 3000,
  delay: 6000,
  animation: 'random',
  animationDuration: 20000,
  timer: false,
  slides: [
    { src: './img/3.jpg' },
    { src: './img/2.jpg' },
    { src: './img/4.jpg' },
    { src: './img/5.jpg' },
    { src: './img/6.jpg' },
    { src: './img/1.jpg' }
    
    
  ]
});
/*CONNEXION */
$('#buttonConnexion').click(function() {
  $('.navbar').hide();
});

$('#connexion').on('hidden.bs.modal', function (e) {
  $('.navbar').show();
  $('.navbar').addClass('animated fadeInUp');

})

/*INSCRIPTION*/

$(function() {

    $('#login-form-link').click(function(e) {
		$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});
/*END CONNEXION & INSCRIPTION*/
function verifConfirmMdp(){
    var inpObj = document.getElementById("password-register");
    if (!inpObj.checkValidity()) {
        document.getElementById("confirm-password").innerHTML=inpObj.validationMessage;
    }
    console.log(mdp); console.log(mdpC);
     
}