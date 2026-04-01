<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
require 'vendor/autoload.php';
 
$mail = new PHPMailer(true);
try {
    // Set to 2 for full debug output (change to 0 after debugging)
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'techomaxcontactus@gmail.com';  
    $mail->Password   = 'mfmlnqrqomhgahwp';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;
 
    $mail->setFrom('techomaxcontactus@gmail.com', $_REQUEST['name']);
    $mail->addAddress('bhumitechomax@gmail.com');
 
    $mail->isHTML(true);
    $mail->Subject = "New Inquiry from " . $_POST['name'];
    $mail->Body = "<h2>Inquiry Details</h2>
        <p><strong>Name:</strong> $first_name $last_name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Message:</strong><br>$message</p>";
 
    $mail->send();
    echo "Email sent successfully!";
} catch (Exception $e) {
    echo "Failed to send email. Error: " . $mail->ErrorInfo;
}

