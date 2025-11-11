<?php
// Load PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Get POST data
$name = isset($_POST['name']) ? strip_tags($_POST['name']) : '';
$email = isset($_POST['email']) ? strip_tags($_POST['email']) : '';
$subjectInput = isset($_POST['subject']) ? strip_tags($_POST['subject']) : '';
$message = isset($_POST['message']) ? strip_tags($_POST['message']) : '';

if (!$name || !$email || !$subjectInput || !$message) {
    http_response_code(400);
    echo 'Please fill in all fields.';
    exit;
}

$mail = new PHPMailer(true);
try {
    // SMTP config
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'shahabazpasha76@gmail.com'; // Your Gmail address
    $mail->Password = 'Pasha@1748'; // Your Gmail App Password
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Recipients
    $mail->setFrom('shahabazpasha76@gmail.com', 'Contact Form');
    $mail->addAddress('shahabazpasha76@gmail.com');
    $mail->addReplyTo($email, $name);

    // Content
    $mail->isHTML(false);
    $mail->Subject = 'New Contact Form Submission: ' . $subjectInput;
    $mail->Body    = "Name: $name\nEmail: $email\nSubject: $subjectInput\nMessage:\n$message";

    $mail->send();
    echo 'Your message has been sent successfully!';
} catch (Exception $e) {
    http_response_code(500);
    echo 'Failed to send message. Mailer Error: ' . $mail->ErrorInfo;
}
?>