<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'anuragmore8715@gmail.com';
        $mail->Password   = 'aajc idjc dazi hacw';   // Important: Use App Password, not Gmail password
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom('anuragmore8715@gmail.com', 'Your Name');
        // $mail->addAddress('recipient@example.com');  // Your destination email
        $mail->addAddress('anuragmore8715@gmail.com');
        $mail->addReplyTo($email, $name);
        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = "Name: $name <br>Email: $email <br>Message: $message";

        $mail->send();
        echo "Message sent successfully!";
    } catch (Exception $e) {
        echo "Mail error: " . $mail->ErrorInfo;
    }
}
?>
