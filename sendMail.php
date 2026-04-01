<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
require 'vendor/autoload.php';
 
$mail = new PHPMailer(true);
try {
    // Set to 2 for full debug output (change to 0 after debugging)

    $first_name = htmlspecialchars($_POST['name']);
    $last_name  = htmlspecialchars($_POST['last_name']);
    $email      = htmlspecialchars($_POST['email']);
    $phone      = htmlspecialchars($_POST['phone']);
    $message    = nl2br(htmlspecialchars($_POST['message']));

    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'techomaxcontactus@gmail.com';  
    $mail->Password   = 'mfmlnqrqomhgahwp';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;
 
    $mail->setFrom('techomaxcontactus@gmail.com', $_REQUEST['name']);
    $mail->addAddress('nikeshjaintms@gmail.com');
 
    $mail->isHTML(true);
    $mail->Subject = "New Inquiry from " . $_POST['name'];
    $mail->Body = '
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <style>
                body {
                    font-family: Arial, sans-serif;
                    background-color: #f4f6f8;
                    padding: 20px;
                }
                .container {
                    max-width: 600px;
                    background: #ffffff;
                    margin: auto;
                    border-radius: 8px;
                    overflow: hidden;
                    box-shadow: 0 0 10px rgba(0,0,0,0.1);
                }
                .header {
                    background: #007bff;
                    color: #ffffff;
                    padding: 15px;
                    text-align: center;
                    font-size: 20px;
                    font-weight: bold;
                }
                .content {
                    padding: 20px;
                }
                .content p {
                    margin: 10px 0;
                    color: #333;
                }
                .label {
                    font-weight: bold;
                    color: #555;
                }
                .footer {
                    background: #f1f1f1;
                    text-align: center;
                    padding: 10px;
                    font-size: 12px;
                    color: #777;
                }
            </style>
        </head>
        <body>

        <div class="container">
            <div class="header">
                📩 New Inquiry Received
            </div>

            <div class="content">
                <p><span class="label">Name:</span> '.$first_name.' '.$last_name.'</p>
                <p><span class="label">Email:</span> '.$email.'</p>
                <p><span class="label">Phone:</span> '.$phone.'</p>
                <p><span class="label">Message:</span><br>'.$message.'</p>
            </div>

            <div class="footer">
                This message was sent from your website contact form.
            </div>
        </div>

        </body>
        </html>
        ';
 
    $mail->send();
    echo "Email sent successfully!";
} catch (Exception $e) {
    echo "Failed to send email. Error: " . $mail->ErrorInfo;
}

