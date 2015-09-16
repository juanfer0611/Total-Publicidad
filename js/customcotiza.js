
$(document).ready(function(){
	$("#fcotizacion").submit(function( event ){
	event.preventDefault();



		$.ajax({
			type: 'POST',
			url: './sendcotiza.php',
			data: $(this).serialize(),
			success: function(data){
				$("#respuesta").slideDown();
				$("#respuesta").html(data);
			}
		});

	

		return false;
	});
});

