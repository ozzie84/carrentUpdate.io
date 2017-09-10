<?php
error_reporting(0);
$mail = "group_metropolis@yahoo.com";
$message = "<h2>Повідомлення з сайта \"Car Rent\":
    ".$_POST['subj']." (форма ".$_POST['form'].")</h2><hr>
    <p><strong>Имя:</strong> ".$_POST['name']."</p>
    <p><strong>E-mail:</strong> ".$_POST['email']."</p>
    <p><strong>Телефон:</strong> ".$_POST['phone']."</p>
    <p><strong>Дата:</strong> ".$_POST['date']."</p>
    <p><strong>Город:</strong> ".$_POST['city']."</p>";

$subject="Повідомлення з сайта \"Car Rent\"";
mail($mail, $subject, $message, "Content-type: text/html; charset=utf-8 \r\n");
echo "Done";