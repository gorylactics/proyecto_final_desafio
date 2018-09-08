$(document).ready(function(){
	// alert('pagina book')

	$('.horizontal').click(function(evt){
		evt.preventDefault();
		evt.stopPropagation();

		$(this).toggleClass('book__click--1');
	});

	$('.vertical').click(function(evt){
		evt.preventDefault();
		evt.stopPropagation();

		$(this).toggleClass('book__click--2');
	});

});


