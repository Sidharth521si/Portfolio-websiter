<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $name = htmlspecialchars(trim($_POST["name"]));
  $email = htmlspecialchars(trim($_POST["email"]));
  $subject = htmlspecialchars(trim($_POST["subject"]));
  $message = htmlspecialchars(trim($_POST["message"]));

  // Your email address
  $to = "sidharthramachandran27@gmail.com";

  // Email content
  $body = "You received a message from your portfolio website:\n\n";
  $body .= "Name: $name\n";
  $body .= "Email: $email\n";
  $body .= "Subject: $subject\n";
  $body .= "Message:\n$message\n";

  // Email headers
  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";

  // Send email
  if (mail($to, $subject, $body, $headers)) {
    echo "Message sent successfully!";
  } else {
    echo "Sorry, your message could not be sent.";
  }
} else {
  echo "Invalid request.";
}
?>