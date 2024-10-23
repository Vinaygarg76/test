<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Email validation and sanitization (optional)
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Email the data
        $to = "your-email@domain.com"; // replace with your email
        $subject = "New Contact Form Submission";
        $body = "Name: $name\nEmail: $email\nMessage:\n$message";
        $headers = "From: $email";

        if (mail($to, $subject, $body, $headers)) {
            echo "Message sent successfully!";
        } else {
            echo "Message failed to send!";
        }
    } else {
        echo "Invalid email address!";
    }
}
?>
