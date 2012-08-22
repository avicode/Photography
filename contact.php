<?PHP 
$to = "admin@avicode.co.uk"; 
$subject = "Contact Form";
$headers = "Name: Form Mailer";
$forward = 1;

$formname = $_POST['name'];
$formemail = $_POST['email'];
$formmsg = $_POST['message'];


$msg = "Message from website:\n\nName: $formname\nEmail: $formemail\n\nMessage: $formmsg"; 

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	foreach ($_POST as $key => $value) { 
		$msg .= ucfirst ($key) ." : ". $value . "\n\n"; 
	}
}
else {
	foreach ($_GET as $key => $value) { 
		$msg .= ucfirst ($key) ." : ". $value . "\n\n"; 
	}
}

mail($to, $subject, $msg); 

?>