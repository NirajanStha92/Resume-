<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "snirajan92@gmail.com";
    $subject = "New message from $name";
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    
    // Send email
    if (mail($to, $subject, $body)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
} else {
    // If the request method is not POST, redirect back to the form page
    header("Location: contact_form.html");
    exit;
}
?>