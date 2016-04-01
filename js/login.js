$(document).ready(function(){
// Popup Window
var scrollTop = '';
var newHeight = '100';
 
$(window).bind('scroll', function() {
  scrollTop = $( window ).scrollTop();
  newHeight = scrollTop + 100;
});
		
$('.popup-trigger').click(function(e) {
  e.stopPropagation();
   $('.popup').after('<div class="overlay"></div>');
  if(jQuery(window).width() < 620) {
    $(this).after( $( ".popup" ) );
    $('.popup').show().addClass('popup-mobile').css('top', 0);
    $('html, body').animate({
      scrollTop: $('.popup').offset().top
    }, 500);   
  } else {
    $('.popup').removeClass('popup-mobile').css('top', newHeight).toggle();
  };
});
		
$('html, .popup-btn-close').click(function(e) {
  $('.popup').hide();
  $('.overlay').detach();
});
 
$('.popup').click(function(e){
  e.stopPropagation();
});


//Envoi des données en ajax
$("#log-in").submit(function(e){
    e.preventDefault();
    
    //Récupère les valeurs des champs du formulaire
    var pseudo = $("#login-pseudo").val();
    var pwd = $("#login-pwd").val();

    //Requête ajax qui permet d'envoyer les données récupérées, en POST
    $.ajax({
         url : 'login.php',
         type : 'POST',
         data : 'pseudo='+pseudo+'&pwd='+pwd,
         dataType : 'html',
         success : function(code_html, statut){
          $("#login-msg").html(code_html); // Affiche le message de bienvenue
          setTimeout(function(){ window.location.reload(); }, 500); //Rafraichi la page au bout de 0.5 secondes
        },
         error : function(resultat, statut, erreur){$("#login-msg").html(resultat.responseText);} //Affiche le message d'erreur
      });
  });

});