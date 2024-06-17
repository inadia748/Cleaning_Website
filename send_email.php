<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Set up email parameters
    $to = 'lmona831@gmail.com'; // Replace with your email address
    $subject = 'Message from your website';
    $body = "Name: $name\n\nEmail: $email\n\nMessage:\n$message";

    // Send email
    if (mail($to, $subject, $body)) {
        echo '<script>alert("Message sent successfully. We will get back to you soon.");</script>';
    } else {
        echo '<script>alert("Sorry, there was an error sending your message. Please try again later.");</script>';
    }
}
?>
