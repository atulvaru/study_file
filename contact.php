<?php
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];

$to = "atulk2512001@gmail.com";
$subject = "Contact Us";

$header = "From: " . $name . "\r\n";

$txt = "Name: " . $name . "
Email: " . $email . "
Contact: " . $contact . ";

if ($email != NULL) {
    $send_email = mail($to, $subject, $txt, $header);
    echo ($send_email) ? '<div class="success">Email has been sent successfully.</div>' : 'Error sending. Please try again later.';
} else {
    echo '<div class="failed">Error: Faild to send. Please try again later.</div>';
}
?>