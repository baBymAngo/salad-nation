<?php 

if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {

	$firstName = strip_tags( trim($_POST['firstName']) );
	$firstName = str_replace( array("\r","\n"), array(" "," "), $firstName );

	$lastName = strip_tags( trim($_POST['lastName']) );
	$lastName = str_replace( array("\r","\n"), array(" "," "), $lastName );

	$address = filter_var(trim($_POST['address']), FILTER_SANITIZE_EMAIL);
	$message = trim( $_POST['message'] );

	$confirmationMessage = "Hey $firstName, I got your message and will respond within 48 hours, although I usually reply much sooner than that. If for some reason you don't hear from me, send another email to liam@liamscott.me and I'll get back to you as soon as possible.\n\nThanks,\n\nLiam";

	// Check that all data was sent
	if ( empty($firstName) OR empty($message) OR !filter_var($address, FILTER_VALIDATE_EMAIL) ) {
		echo "user error";
		exit;
	}

	// Send emails
	$email = mail( 'liam@liamscott.me', "A message from $firstName $lastName", $message, "From: $address");
	$confirmation = mail( $address, 'Got your note',  $confirmationMessage, 'From: liam@liamscott.me\r\nContent-Type: text/html' );

	if ( $email && $confirmation ) {
		echo "success";
	} else {
		echo "fail";
	}

}