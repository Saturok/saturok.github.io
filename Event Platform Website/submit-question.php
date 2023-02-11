<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $question = $_POST["question"];

  $to = "wattongroup@gmail.com";
  $subject = "Question from event platform website";
  $message = "Name: $name\nEmail: $email\nQuestion: $question";
  $headers = "From: $email";

  if (mail($to, $subject, $message, $headers)) {
    echo "Your question was successfully sent!";
  } else {
    echo "There was an error sending your question. Please try again later.";
  }
}