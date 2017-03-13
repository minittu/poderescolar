 $("document").ready(function(){
	$("#cpf").mask("999.999.999-99");
	
	$("#nec-especiais-1").bind("click", function(){
		$("#nec-especiais-qual").fadeIn('slow');
		$('label[for="nec-especiais-qual"]').fadeIn('slow');
		$("#nec-especiais-qual").attr('required','required');
	});
	
	$("#nec-especiais-0").bind("click", function(){
		$("#nec-especiais-qual").fadeOut('slow');
		$('label[for="nec-especiais-qual"]').fadeOut('slow');
		$("#nec-especiais-qual").removeAttr('required');
	});
 });