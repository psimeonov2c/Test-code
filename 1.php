<?php require(__DIR__ . '/partials/header.php'); ?>

<script>
	// Покажете div#message, след натискане на бутона #button
	$( document ).ready( function() {
		$( '#button' ).on( 'click' , function(event){
	    	console.log('gh');
			$( '#message' ).removeClass( 'hidden' );
			
			event.preventDefault();
		});
	});
</script>

<button class="btn btn-primary" id="button">Show the message!</button>

<div id="message" class="alert alert-info hidden">yey :-)</div>

<?php require(__DIR__ . '/partials/footer.php'); ?>
