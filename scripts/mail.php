<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../PHPMailer-6.9.1/src/Exception.php';
require '../PHPMailer-6.9.1/src/PHPMailer.php';
require '../PHPMailer-6.9.1/src/SMTP.php';

require 'vendor/autoload.php';
$mail = new PHPMailer(true);

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Check values in DB
include_once 'connectDB.php';
$conn = connectToDB();
$query = "SELECT * FROM settings";
$result = mysqli_query($conn, $query);
# Set server settings from DB values
$row = mysqli_fetch_assoc($result);
$mailHost = $row['phpmailerHost'];
$mailUser = $row['phpmailerUser'];
$mailPassword = $row['phpmailerPassword'];
$mailPort = $row['phpmailerPort'];
mysqli_close($conn);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = $mailHost;
    $mail->SMTPAuth = true;
    $mail->Username = $mailUser;
    $mail->Password = $mailPassword;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = $mailPort;

    # Mail for AIMA
    //Recipients
    $mail->setFrom('info@aima-developement.com', 'AIMA Website');
    $mail->addAddress('contact@aima.fr');

    //Content
    $mail->isHTML(true);
    $mail->Subject = '[AIMA Website]' . $subject;
    $mail->Body = 'Nouveau message de ' . $firstname . ' ' . $lastname . ' (' . $email . ') : <br>' . $message;
    $mail->AltBody = 'Nouveau message de ' . $firstname . ' ' . $lastname . ' (' . $email . ') : ' . $message;

    $mail->send();

    # Mail for User
    //Recipients
    $mail->setFrom('info@aima-developement.com', 'AIMA Website');
    $mail->addAddress($email);

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'Re: ' . $subject;
    $mail->Body = 'Bonjour ' . $firstname . ' ' . $lastname . ',<br><br>Nous avons bien reçu votre message et nous vous en remercions.<br>Nous vous répondrons dans les plus brefs délais.<br><br>Cordialement,<br>L\'équipe AIMA';
    $mail->AltBody = 'Bonjour ' . $firstname . ' ' . $lastname . ',\n\nNous avons bien reçu votre message et nous vous en remercions.\nNous vous répondrons dans les plus brefs délais.\n\nCordialement,\nL\'équipe AIMA';

    $mail->send();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

# Développé avec ❤️ par : www.noasecond.com.

// Développé avec ❤️ par : www.noasecond.com.