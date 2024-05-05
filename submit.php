<?php
include('smtp/PHPMailerAutoload.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $to = isset($_POST['to']) ? trim($_POST['to']) : "";
    $subject = isset($_POST['sub']) ? trim($_POST['sub']) : "";
    $msg = isset($_POST['msg']) ? trim($_POST['msg']) : "";

    echo smtp_mailer('to_email', 'Subject', 'html');
    function smtp_mailer($to, $subject, $msg)
    {
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 587;
        $mail->IsHTML(true);
        $mail->CharSet = 'UTF-8';
        //$mail->SMTPDebug = 2; 
        $mail->Username = "abhinandansarkar00@gmail.com";
        $mail->Password = "vfxtmhxnkyhsysxx";
        $mail->SetFrom("abhinandansarkar00@gmail.com");
        $mail->Subject = $subject;
        $mail->Body = $msg;
        $mail->AddAddress($to);
        $mail->SMTPOptions = array('ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => false
        ));
        if (!$mail->Send()) {
            echo $mail->ErrorInfo;
        } else {
            return 'Sent';
        }
    }
}
