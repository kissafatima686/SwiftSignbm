<?php

header('Content-Type: application/json');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/PHPMailer/src/Exception.php';
require __DIR__ . '/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';

$name      = $_POST['name'] ?? '';
$email     = $_POST['email'] ?? '';
$phone     = $_POST['phone'] ?? '';
$comments  = $_POST['comments'] ?? '';
$from_page = $_POST['from_page'] ?? '';

if (!$name || !$email || !$comments) {
    echo json_encode([
        "status" => "error",
        "message" => "Missing required fields"
    ]);
    exit;
}

$mail = new PHPMailer(true);

try {

    $mail->isSMTP();
    $mail->Host = 'mail.swiftsignbm.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'info@swiftsignbm.com';
    $mail->Password = '*I{tfxpQDF-{7JVf';

    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;

    $to_email = 'info@swiftsignbm.com';
    if ($from_page === 'advisory') {
        $to_email = 'Aliyan@swiftsignbm.com';
    }

    $mail->setFrom('info@swiftsignbm.com', 'Website');
    $mail->addAddress($to_email);

    $mail->isHTML(true);
    $mail->Subject = "New Contact Message";

    $mail->Body = "
        <b>Name:</b> $name <br>
        <b>Email:</b> $email <br>
        <b>Phone:</b> $phone <br>
        <b>Message:</b><br>$comments
    ";

    $mail->send();

    echo json_encode([
        "status" => "success",
        "message" => "Message sent successfully"
    ]);

} catch (Exception $e) {

    echo json_encode([
        "status" => "error",
        "message" => $mail->ErrorInfo
    ]);
}