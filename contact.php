<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Validate the data (you can add more validation)
    if (empty($name) || empty($email) || empty($message)) {
        echo "Please fill in all fields.";
    } else {
        // Process the data (e.g., send an email, save to a database)
        // Replace this with your actual processing code
        // For example, you can send an email like this:
        // mail("recipient@example.com", "Contact Form Submission", $message, "From: $email");

        echo "Form submitted successfully!";
    }
}
?>