<?php

/**
 * Load Dependencies
 */
require_once "C:\\Users\\srilakshmikanthanp\\Source Code\\finlarks.github.io\\vendor\autoload.php";

/**
 * utility class
 */
class Utility
{
  /**
   * Sends Mail
   */
  public static function send_mail($name, $email, $phone, $query)
  {
    $status = [
      'success' => true,
      'name' => true,
      'email' => true,
      'phone' => true,
      'query' => true,
      'error' => null
    ];

    if (strlen(trim($name)) == 0) {
      $status["name"] = false;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $status["email"] = false;
    }

    if (strlen(trim($phone)) == 0) {
      $status["phone"] = false;
    }

    if (strlen(trim($query)) == 0) {
      $status["query"] = false;
    }

    if (($status["name"] && $status["email"] && $status["phone"] && $status["query"]) == false) {
      $status["success"] = false;
      return $status;
    }

    $name   = trim($name);
    $email  = trim($email);
    $phone  = trim($phone);
    $query  = trim($query);

    $mail = new \PHPMailer\PHPMailer\PHPMailer();

    try
    {
      // $mail->SMTPDebug  = PHPMailer\PHPMailer\SMTP::DEBUG_SERVER;
      $mail->isSMTP();
      $mail->Host       = '';
      $mail->SMTPAuth   = true;
      $mail->Username   = '';
      $mail->Password   = '';
      $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS;
      $mail->Port       = 465;

      // Recipients
      $mail->setFrom('srilakshmikanthanp@gmail.com', 'Mailer');
      $mail->addAddress('srilakshmikanthanp@gmail.com', 'Sri Lakshmi Kanthan P');
      $mail->addAddress('mohamedishak440@gmail.com', 'Mohamed Ishak');
      $mail->addReplyTo($email, $name);

      // Content
      // $mail->isHTML(true);
      $mail->Subject = "Query from $name<$email;$phone>";
      $mail->Body    = $query;

      // send
      $mail->send();
    }
    catch (PHPMailer\PHPMailer\Exception $e)
    {
      $status['success'] = false;
    }

    return json_encode($status);
  }
}
