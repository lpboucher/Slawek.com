<?php

  session_start();

  function message() {
    if (isset($_SESSION["message"])) {
      $output = "<div class=\"message\">";
      $output .= htmlentities($_SESSION["message"]);
      $output .= "</div>";

      // clear message after use
      $_SESSION["message"] = null;
  } elseif (isset($_SESSION["errors"])) {
      $output = $_SESSION["errors"];

      // clear message after use
      $_SESSION["errors"] = null;
  } else {
      $output = null;
      $_SESSION["message"] = null;
      $_SESSION["errors"] = null;
  }
    return $output;
  }

  function errors($email, $name , $message) {
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    $string_exp = "/^[A-Za-z .'-]+$/";
    $error_message = "";

    if(!preg_match($email_exp,$email)) {
      $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
    }
    if(!preg_match($string_exp,$name)) {
      $error_message .= 'The Name you entered does not appear to be valid.<br />';
    }
    if(strlen($message) < 2) {
      $error_message .= 'The Message you entered does not appear to be valid.<br />';
    }

    return $error_message;
  }

?>
