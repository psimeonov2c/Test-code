$(document).ready(function() {
	// - Използвайте AJAX, за да изпратите съдържанието на формата до `book.php` - http://learn.jquery.com/ajax/key-concepts/#get-vs-post, http://learn.jquery.com/ajax/ajax-and-forms/.
	// - Покажете следното съобщение `Trip to {destination} at ${price} for {nights} nights. Your confirmation code: {data.confirmation}.`, като
	//   заместите `{}` с резултата, който е върнат след обработката на информацията.
	//
	// Демо: https://s3-eu-west-1.amazonaws.com/codecraft-production/uploads/05af82d4340a14b88bb8122f93577b7c/book-a-trip.webm
	
	// the template assigning
	var inputPrintF = _.template(
		$("script.template").html()
	);
	
	$('.form-horizontal').on("submit", function(e){
		e.preventDefault();
		
		//data colected for sending
		var status;
		
		var nights = $("#nights").val();
		var price = $("#price").val();
		var destination = $("#destination").val();
		
		$.ajax({
		    url: "book.php",
		    type: "POST",
		    data: {
		    	nights: nights,
		    	price: '357',
		    	destination: "Parisss",
		    },
		    dataType : "json",
		})

		.done(function( response ) {
			alert(" response succeeds is done");
			status = true;
			console.log(response);
			
		
			
			
			//  с референция да подам  обекта  към темплейта
			$(".dataInput").html(inputPrintF(response));
						
			
			
	  	})

		.fail(function() {
			console.log( "Sorry, there was a problem!" );
			status = true;
	
		})
		
	  	.always(function() {
	   		console.log( "The response is aways complete!" );
		})
	});
  
});
