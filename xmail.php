<?php
/*
$to = 'to@domain.xx';
$from = 'from@domain.xx';
$replyto= 'reply@domain.xx';
$subject = 'Test mail vege';

$message = '
<!DOCTYPE html>
<html lang="pl">
<head>
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
<style>
.mail-body {
    float: left;
    width: 100%;
    padding: 0px;
    margin: 0px;
    min-height: 100vh;
    box-sizing: border-box;
}
.mail-body * {
    box-sizing: border-box;
}
mail-bg {
    float: left;
    width: 100%;
    min-height: 100vh;
    box-sizing: border-box;
    background: #00225505;
}
.mail-message {
    position: relative;
    margin: 60px auto;
    width: 90%;
    max-width: 768px;
    padding: 15px 25px;
    background: #fff;
    overflow: hidden;
    border: 8px solid #00225511;
    box-sizing: border-box;
}
</style>
</head>
<body class="mail-body">
    <div class="mail-bg">
        <div class="mail-message">
            Html message content goes here ...
        </div>
    </div>
</body>
</html>
';
*/

function xmail($to,$from,$replyto,$subject,$message,$cc_email = '') 
{
    $headers = "From: '.$from.'\r\n";
    $headers .= "Reply-To: '.$replyto.'\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    if(!empty($cc)) {
        $headers .= "CC: '.$cc_email.'\r\n";
    }
    return mail($to, $subject, $message, $headers);
}


// Send html email
// echo xmail($to,$from,$replyto,$subject,$message,$cc_email = '');
