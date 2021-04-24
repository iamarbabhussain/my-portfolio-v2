<?php

$name = $_POST['from_name'];
$from = $_POST['from_email'];
$message = $_POST['from_message'];


$to='arbabhussain168@gmail.com';
$subject = 'From arbabhussain.me';
$full_message = 'Name: '. $name . '            Email/Whatsapp: ' . $from . '            Message: ' . $message;
$from = 'From: info_arbabhussain.me@yahoo.com' ;


if($result = mail($to, $subject, $full_message, $from))
{
    echo 'sent';
}
else
{
    echo 'not sent';
}

?>