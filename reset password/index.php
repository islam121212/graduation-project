<?php

require_once 'mail.php';
$mail->setFrom('oblisk121@gmail.com', 'Oblisk');
$mail->addAddress('eslamembaby33@gmail.com'); 

    $mail->Subject = 'Hi islam , Welcome to Oblisk';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->send();
?>