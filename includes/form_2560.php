<?php	
	if (empty($_POST['name_19248_32742_2560']) && strlen($_POST['name_19248_32742_2560']) == 0 || empty($_POST['_32742_2560']) && strlen($_POST['_32742_2560']) == 0 || empty($_POST['message_19248_32742_2560']) && strlen($_POST['message_19248_32742_2560']) == 0)
	{
		return false;
	}
	
	$name_19248_32742_2560 = $_POST['name_19248_32742_2560'];
	$_32742_2560 = $_POST['_32742_2560'];
	$ = $_POST[''];
	$message_19248_32742_2560 = $_POST['message_19248_32742_2560'];
	$optin_19248_32742_2560 = $_POST['optin_19248_32742_2560'];
	
	$to = 'serviktor@mail.ru'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "CODD";
	$email_body = "+1 сообщение \n\n".
				  "Name_19248_32742_2560: $name_19248_32742_2560 \n_32742_2560: $_32742_2560 \n: $ \nMessage_19248_32742_2560: $message_19248_32742_2560 \nOptin_19248_32742_2560: $optin_19248_32742_2560 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: terehovich_vg@mail.ru\n";
	$headers .= "Reply-To: $_32742_2560";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>