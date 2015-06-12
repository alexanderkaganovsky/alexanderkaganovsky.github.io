<?php
$field_first_name = $_POST['cf_first_name'];
$field_last_name = $_POST['cf_last_name'];
$field_email = $_POST['cf_email'];
$field_message = $_POST['cf_message'];

$mail_to = 'guykaganovsky@live';
$subject = 'Message from a site visitor '.$field_name;

$body_message = 'From: '.$field_first_name."\n";
$body_message = 'From: '.$field_last_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for the message. We will contact you shortly.');
		window.location = 'contact_page.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please, send an email to guykaganovsky@live');
		window.location = 'contact_page.html';
	</script>
<?php
}
?>