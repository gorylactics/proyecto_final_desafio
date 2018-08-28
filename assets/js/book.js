$(document).ready(function(){
	// alert('pagina book')

	$('#book').click(function(evt){

		evt.preventDefault();
		evt.stopPropagation();
		$("#book").toggleClass('book__click');
	

	});

	// $('#book').click(function(evt){
		// evt.preventDefault();
		// evt.stopPropagation();

	// 	$(this).toggleClass('book__click');


});


