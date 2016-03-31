$(document).ready(function() {

	var width = window.innerWidth;
	/*var captcha = document.getElementById("recaptcha");
	var datasize = captcha.getAttribute("data-size");

	 if ($(window).width() <= 400){	
	 	captcha.setAttribute("data-size", "compact");
	}*/

	$("#signup").submit(function(e)
	{
		e.preventDefault();
		
		//Récupère les valeurs des champs du formulaire
		var pseudo = $("input[name=pseudo]").val();
		var pwd = $("input[name=pwd]").val();
		var mail = $("input[name=mail]").val();
		var age = $("select[name=age]").val();
		var gender = $("input[name=gender]:checked").val();

		//Requête ajax qui permet d'envoyer les données récupérées, en POST
		$.ajax({
	       url : 'signup.php',
	       type : 'POST',
	       data : 'pseudo='+pseudo+'&pwd='+pwd+'&mail='+mail+'&age='+age+'&gender='+gender,
	       dataType : 'html',
	       success : function(code_html, statut){
	       		swal({title:'',
	       			text: code_html});
           },
	       error : function(resultat, statut, erreur){
	       		alert(erreur);
	       }
	    });

	});
});