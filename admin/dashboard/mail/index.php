<!-- Hiện tại tổng số mail khách hàng đang có : ......
Bạn có chắc gửi mail đến những người này? -->
<?php

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/OAuth.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/POP3.php';
require 'PHPMailer-master/src/SMTP.php';
	

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";

try {
    //Server settings
    $mail->SMTPDebug  = 1;  
	$mail->SMTPAuth   = TRUE;
	$mail->SMTPSecure = "tls";
	$mail->Port       = 587;
	$mail->Host       = "smtp.gmail.com";
	$mail->Username   = "ambakery2022@gmail.com";
	$mail->Password   = "website2022";


    $mail->IsHTML(true);
    //Recipients
    $mail->setFrom('ambakery2022@gmail.com', 'AmBakery');
    $mail->addAddress('nguyenthanhsang2401@gmail.com', 'Sang');     //Add a recipient

    //Content
	$mail->Subject = "Test is Test Email sent via Gmail SMTP Server using PHP Mailer";
	$content = "<b>This is a Test Email sent via Gmail SMTP Server using PHP mailer class.</b>";

    
    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}