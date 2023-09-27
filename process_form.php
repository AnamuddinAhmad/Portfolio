<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Extract form data
$name = $_POST["Name"];
$email = $_POST["email"];
$github = $_POST["GitHub"];

// Validate data (e.g., check if email is valid)

// Send email
$to = "anamuddinahmad786@gmail.com";
$subject = "Contact Form Submission from $name";
$message = "Name: $name\nEmail: $email\nGitHub: $github";
$headers = "From: $email";

// Use mail() function to send the email
mail($to, $subject, $message, $headers);

// Redirect to a thank you page
header("Location: thank_you.html");
exit();

}
?>
