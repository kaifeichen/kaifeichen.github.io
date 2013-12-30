<?php
  session_start();
  require_once('recaptchalib.php');
  $privatekey = "6LfwKs8SAAAAAOHmvvj74JPCS46a-1qkyM-ah_ca";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
         "(reCAPTCHA said: " . $resp->error . ")");
  } else {
    // Your code here to handle a successful verification
    $_SESSION['verified'] = true;
    header ("Location: http://kaifei.me/CV/CV.php");
  }
?>
