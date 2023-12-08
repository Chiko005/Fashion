<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define your email address where you want to receive the form submissions.
    $to = "dhakera149@gmail.com";

    // Subject of the email.
    $subject = "Contact Form Submission";

    // Collect form data from the POST request.
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Construct the email message.
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Subject: $subject\n";
    $message .= "Message:\n$message";

    // Set additional headers.
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n";

    // Attempt to send the email.
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for contacting us. We will get back to you shortly.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    // If the script is accessed directly, display an error message.
    echo "Access denied.";
}
?>
