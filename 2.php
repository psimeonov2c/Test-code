<?php require(__DIR__ . '/partials/header.php'); ?>

<script>
	// При натискане на бутона:
	// - показвайте div#message ако той е скрит в момента
	// - скривайте div#message ако той е показан в момента
	$( document ).ready( function(){
		$( '#button' ).on( 'click', function(){
			if( $( '#message' ).hasClass( 'hidden' ) ){
				$( '#message' ).removeClass( 'hidden' );
			}else{
				$( '#message' ).addClass( 'hidden' );
			}
		});
	});
</script>

<button class="btn btn-primary" id="button">Toggle the message!</button>

<div id="message" class="alert alert-info hidden">yey :-)</div>

<?php require(__DIR__ . '/partials/footer.php'); ?>