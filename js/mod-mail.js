$(document).ready(function() {
	$.ajax({
	    url : 'modify-mail.php',
	    type : 'POST',
	    data : '&mail='+mail,
	    dataType : 'html',
	    success : function(code_html, statut){
	       	swal({
	       		title:'',
	       		text: code_html,
	       		closeOnConfirm:false
	       	},
	       		function(){
	       			swal.close(); //ferme la pop-up
	       			setTimeout(function(){window.location.assign("index.php");},1000); //remplace le document courant par index.php
	       			}
	       		);
           },
	    error : function(resultat, statut, erreur){
	       	alert(erreur);
	    }
	});
});