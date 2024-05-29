<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$SMTP_USERNAME = $_ENV['SMTP_USERNAME'];

$user_name = $user_email = $user_message = "";

    $user_name = $_POST["name"];
    $user_email = $_POST["email"];
    $user_message = $_POST["message"];

    $subject = "New Demo Submit from ".$user_name;
    $to = $user_email;
    $message = $user_message;

    $mail = new PHPMailer();

    //SMTP settings
    $mail->SMTPDebug = SMTP::DEBUG_OFF;
    $mail->isSMTP();
    $mail->Host = $_ENV['SMTP_HOST'];
    $mail->SMTPAuth = true;
    $mail->Username=$SMTP_USERNAME;
    $mail->Password=$_ENV['SMTP_PASSWORD'];
    $mail->Port = $_ENV['SMTP_PORT'];
    $mail->SMTPSecure= PHPMailer::ENCRYPTION_STARTTLS;

    //Email Settings
    $mail->isHTML(true);
    try {
        $mail->setFrom($SMTP_USERNAME, $user_name);
    } catch (\PHPMailer\PHPMailer\Exception $e) {
    }
    try {
        $mail->addAddress($user_email);
    } catch (\PHPMailer\PHPMailer\Exception $e) {
    }
    $mail->Subject = $subject;
    $mail->Body = $message;

    try {
        if ($mail->send()) {
            $response = "Email is Sent!";
            echo $response;
        } else {
            $response = "Something is wrong: <br><br>";
            echo $response;
        }
    } catch (\PHPMailer\PHPMailer\Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }