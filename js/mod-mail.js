$(document).ready(function()
{

	$("#changeEmail").submit(function(e)
	{
		e.preventDefault();
		var mail = $("input[name=mail]").val();
		console.log(mail);

		$.ajax({
		    url : 'modify-mail.php',
		    type : 'POST',
		    data : 'mail='+mail,
		    dataType : 'html',
		    success : function(code_html, statut){
		    	$("#message").html(code_html);   	
	        },
		    error : function(resultat, statut, erreur){
		       	alert(erreur);
		    }
		});
	});

});