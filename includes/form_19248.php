<?php	
	if (empty($_POST['name_19248']) && strlen($_POST['name_19248']) == 0 || empty($_POST['']) && strlen($_POST['']) == 0 || empty($_POST['message_19248']) && strlen($_POST['message_19248']) == 0)
	{
		return false;
	}
	
	$name_19248 = $_POST['name_19248'];
	$ = $_POST[''];
	$select_538 = $_POST['select_538'];
	$message_19248 = $_POST['message_19248'];
	$optin_19248 = $_POST['optin_19248'];
	
	$to = 'serviktor@mail.ru'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "CODD";
	$email_body = "+1 сообщение \n\n".
				  "Name_19248: $name_19248 \n: $ \nSelect_538: $select_538 \nMessage_19248: $message_19248 \nOptin_19248: $optin_19248 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: terehovich_vg@mail.ru\n";
	$headers .= "Reply-To: $";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>