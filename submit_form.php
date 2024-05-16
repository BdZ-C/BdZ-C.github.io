<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  
  $to = "badulchowdhury@proton.me"; // Replace with your email address
  $subject = "New inquiry from $name";
  $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
  
  if (mail($to, $subject, $body)) {
    echo "Thank you for your inquiry. We will get back to you soon!";
  } else {
    echo "Sorry, there was an error sending your message. Please try again later.";
  }
}
?>