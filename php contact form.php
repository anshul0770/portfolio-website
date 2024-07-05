<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['Name']);
    $contact_number = htmlspecialchars($_POST['Contact number']);
    $email = htmlspecialchars($_POST['Email']);
    $message = htmlspecialchars($_POST['Message']);

    // Basic email validation
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $to = "anshulsharmacoc@gmail.com"; // Change this to your email address
        $headers = "From: $email\r\n";
        $email_subject = "Contact Form: $subject";
        $email_body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

        if (mail($to, $email_subject, $email_body, $headers)) {
            echo "Message sent successfully!";
        } else {
            echo "Failed to send message.";
        }
    } else {
        echo "Invalid email address.";
    }
} else {
    echo "Invalid request.";
}
?>
