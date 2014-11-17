<?php
if(isset($_POST['send1']))
{
    $to      = 'riivoparts@gmail.com';
    $message = 'Name: ' . $_POST['name1'] . "\r\n\r\n";
    $message .= 'Email: ' . $_POST['email1'] . "\r\n\r\n";
    $message .= 'Messege: ' . $_POST['messege1'];
    $headers = 'From: webmaster@example.com' . "\r\n" .
        'Reply-To: webmaster@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
}
echo $message;
?>
<?php
if(isset($_POST['send2']))
{
    $to      = 'riivoparts@gmail.com';
    $subject = 'Küsimus';
    $message = 'Name: ' . $_POST['name2'] . "\r\n\r\n";
    $message .= 'Email: ' . $_POST['email2'] . "\r\n\r\n";
    $message .= 'Messege: ' . $_POST['messege2'];
    $headers = 'From: webmaster@example.com' . "\r\n" .
        'Reply-To: webmaster@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
}
echo $message;
?>