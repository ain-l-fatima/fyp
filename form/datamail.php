<?php
$html='<h2>Hello Vishal</h2>';
echo smtp_mailer ('ainul.zahra72@gmail.com', 'Hello Vishal', $html);
function smtp_mailer ($to, $subject, $msg) {
require_once("smtp/class.phpmailer.php");

$mail = new PHPMailer();

$mail->ISSMTP();
$mail->SMTPDebug = 1;
$mail->SMTPAuth = true;
$mail->SMTPSecure ='TLS';
$mail->Host = "smtp.office365.com";
$mail->Port =587;
$mail->IsHTML (true);
$mail->CharSet ='UTF-8';
$mail->Username = "";
$mail->Password = "";
$mail->SetFrom("");
$mail->Subject = $subject; $mail->Body =$msg;
$mail->AddAddress ($to);
if (!$mail->send()) {



return 0;

}else
{
return 1;
}
}
?>