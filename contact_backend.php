<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Add your email address here
    $to = "dixitk941@email.com"ur;

    // Set email subject
    $subject = "Contact Form Submission";

    // Compose the email message
    $message = "Name: " . $name . "\n\nEmail: " . $email . "\n\nMessage:\n" . $message;

    // Additional headers
    $headers = "From: " . $email;

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "<p>Your message has been sent successfully. We will get back to you shortly.</p>";
    } else {
        echo "<p>Oops! Something went wrong. Please try again later.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Your head content goes here -->
</head>
<body>
    <!-- Your HTML content goes here -->

    <section id="contact">
        <h2>Contact Us</h2>
        <p>Feel free to get in touch with us:</p>
        <form id="contact-form" action="" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            <button type="submit">Send</button>
        </form>
    </section>
</body>
</html>
