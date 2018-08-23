$(document).ready(function(){
	//aca se ingresa todo el codigo
	alert('hola');

	setTimeout(function(){
		var url = "inicio.html"; 
		$(location).attr('href',url);
	}, 3000);
	

});