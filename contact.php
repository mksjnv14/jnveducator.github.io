<?php
  $to = 'info@kanpursouthacademy.com';
            $subject = 'Contact Us Enquiry From Website';
			$headers = "From: " . strip_tags($_POST['name']) . "\r\n";
			$headers .= "Reply-To: ". strip_tags($_POST['name']) . "\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
  		
$message = '<html><body>';
$message .= '<img src="" alt="Enquiry From Website" />';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Mobile:</strong> </td><td>" . strip_tags($_POST['mobile']) . "</td></tr>";
$message .= "</table>";
$message .= "</body></html>";
$result=mail($to, $subject, $message, $headers);
//echo $message;
header('Location: thanks.html');
?>