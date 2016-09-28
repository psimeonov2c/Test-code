<?php require(__DIR__ . '/partials/header.php'); ?>

<script>
	// При натискане на линка:
	//  - покажете диалогов прозореж на потребителя по този начин: window.confirm("You're about to leave this page. Are you sure? ");
	$( document ).ready(function(){
		$( "#external-link" ).on( "click", function(event){
			event.preventDefault();
			if( window.confirm( "You're about to leave this page. Are you sure? ") ){
				console.log('You clicked OK');
			}else{
				console.log('You clicked Cancel');
			}
		});
	});
	
	
	
	//  - повече информация за window.confirm() можете да прочетете тук: https://developer.mozilla.org/en-US/docs/Web/API/Window/confirm
	//  - ако потребителя натисне "Cancel" в доалоговия прозорец, предотвратете навигирането до външната страница
	//  - ако потребителя натисне "OK", не правете нищо, и позолете навигирането до външната страница
</script>

<a href="http://example.com/" id="external-link">Go to google.com</a>

<?php require(__DIR__ . '/partials/footer.php'); ?>