<?php

/**
 * Load Dependencies
 */
require_once __DIR__ . "/../vendor/autoload.php";

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
      $mail->Host       = 'smtpout.secureserver.net';
      $mail->SMTPAuth   = true;
      $mail->Username   = getenv("MAIL_USERNAME");
      $mail->Password   = getenv("MAIL_PASSWORD");
      $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS;
      $mail->Port       = 465;

      // Recipients
      $mail->setFrom('support@finlarks.com', 'Finlakrs Support');
      $mail->addAddress('srilakshmikanthanp@gmail.com', 'Sri Lakshmi Kanthan P');
      $mail->addAddress('mohamedishak440@gmail.com', 'Mohamed Ishak');
      $mail->addAddress('harishragulkarthik@gmail.com', "Harish Ragul Karthik");
      $mail->addReplyTo($email, $name);

      // Content
      $mail->isHTML(true);
      $mail->Subject = "Query from $name";
      $mail->Body    = "
        <h1>Query from $name</h1>
        <p>
          <strong>Name :</strong> $name<br>
          <strong>Email :</strong> $email<br>
          <strong>Phone :</strong> $phone<br>
        </p>
        <h1>Query:</h1>
        <p>$query</p>
      ";

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
