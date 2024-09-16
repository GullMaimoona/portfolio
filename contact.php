<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $project = htmlspecialchars($_POST['project']);
    $message = htmlspecialchars($_POST['message']);

    // Your email address
    $to = "gullmaimoona853@gmail.com";
    $subject = "New Message from Contact Form";
    
    // Email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Project: $project\n";
    $email_content .= "Message:\n$message\n";

    // Email headers
    $headers = "From: $name <$email>";

    // Send email
    if (mail($to, $subject, $email_content, $headers)) {
        echo "<script>alert('Message sent successfully!'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Failed to send message. Please try again later.'); window.location.href='index.html';</script>";
    }
} else {
    echo "<script>alert('Something went wrong. Please try again later.'); window.location.href='index.html';</script>";
}
?>
