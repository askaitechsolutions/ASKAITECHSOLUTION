<?php
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include 'config.php';
session_start();

if (isset($_POST['name'])) {
    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address.";
        exit();
    }

    $sql = "INSERT INTO contact_form (name, email, subject, message) 
            VALUES ('$name', '$email', '$subject', '$message')";
            if (!$sql) {
        die("Prepare failed: " . $conn->error);
    }

    if ($conn->query($sql)) {
        $mail = new PHPMailer(true);
        try {
            // SMTP Configuration
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'deshmukhaditya514@gmail.com';   
            $mail->Password   = '';    // Your App Password
            $mail->SMTPSecure = 'tls';
            $mail->Port       = 587;

            // Email sender & recipient
            $mail->setFrom('deshmukhaditya514@gmail.com', 'Website Contact Form');
            $mail->addAddress('deshmukhaditya514@gmail.com');
            $mail->addReplyTo($email, $name);

            $mail->isHTML(false);
            $mail->Subject = "New Contact Form Submission";
            $mail->Body    = "You received a new message from your website contact form:\n\n" .
                            "Name: $name\n" .
                            "Email: $email\n" .
                            "Subject: $subject\n" .
                            "Message:\n$message";

                if ($mail->send()) {
                    echo "Mail sent successfully!";
                } else {
                    echo "Mail sending failed.";
                }


            // echo "Message sent successfully!";
            exit();
        } catch (Exception $e) {
            echo "Mailer Error: " . $mail->ErrorInfo;
            exit();
        }
    } else {
        echo "Database Error: " . $conn->error;
        exit();
    }
}
?>