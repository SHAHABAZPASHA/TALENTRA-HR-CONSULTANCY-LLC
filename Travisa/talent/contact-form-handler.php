<?php
// Simple PHP contact form handler
// Change $to to your email address
$to = 'shahabazpasha76@gmail.com';
$subject = 'New Contact Form Submission';

// Get POST data
$name = isset($_POST['name']) ? strip_tags($_POST['name']) : '';
$email = isset($_POST['email']) ? strip_tags($_POST['email']) : '';
$subjectInput = isset($_POST['subject']) ? strip_tags($_POST['subject']) : '';
$message = isset($_POST['message']) ? strip_tags($_POST['message']) : '';

// Basic validation
if (!$name || !$email || !$subjectInput || !$message) {
    http_response_code(400);
    echo 'Please fill in all fields.';
    exit;
}

// Email content
$body = "Name: $name\nEmail: $email\nSubject: $subjectInput\nMessage:\n$message";
$headers = "From: $email\r\nReply-To: $email";

// Send email
if (mail($to, $subject, $body, $headers)) {
    echo 'Your message has been sent successfully!';
} else {
    http_response_code(500);
    echo 'Failed to send message. Please try again later.';
}
?>