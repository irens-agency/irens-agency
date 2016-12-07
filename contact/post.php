<?php

require_once('../PHPMailer/class.phpmailer.php');
/*require '../PHPMailer/PHPMailerAutoload.php';*/
/*$header = "From: \"Обратная связь IRENS\" <irens.com.ua>\n";
$header .= "Content-type: text/plain; charset=\"utf-8\"";
mail("irensagency@mail.ru", "Обратная связь", "Имя: $_POST[name] \nТелефон: $_POST[phone] \nСоциальные сети: $_POST[network]", $header);
header('Location: thankyou.html#thanks');*/

$email = new PHPMailer;

// email fields: to, from, subject, and so on
$to = 'irensagency@mail.ru';
$from = 'agency-w@yandex.ru';
$subject = "Обратная связь IRENS";
$message = "";
$headers = "Обратная связь IRENS: $from";

$email->CharSet = "UTF-8";
$email->From = $from;
$email->FromName = 'IRENS ОБРАТНАЯ СВЯЗЬ';
$email->Subject = $subject;

$message .= "\n\nИмя Фамилия: $_POST[name]\n\nТелефон: $_POST[phone]";
$email->Body = $message;

$email->addAddress('irensagency@mail.ru');
//$uploads_dir = '/home/localhost/www/irens/temp';
$uploads_dir = '/home/llakfvhq/irens.com.ua/temp';

$name = '';

$cn = count($_FILES['upload-file']['name']);

$img_array = array();

for ($i=0; $i < $cn; $i++) {
    $tmp_name = $_FILES["upload-file"]["tmp_name"][$i];
    $name = $_FILES["upload-file"]["name"][$i];
    move_uploaded_file($tmp_name, "$uploads_dir/$name");


    $file_to_attach = $uploads_dir;
    $file_to_attach .= '/';
    $file_to_attach .= $name;
    $email->addAttachment($file_to_attach/*, '$i.jpg'*/);
    array_push($img_array, $file_to_attach);
}

$email->send();

/*if (!$email->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $email->ErrorInfo;
    exit;
}

echo 'Message has been sent';*/

foreach($img_array as $value)
{
    unlink($value);
}

header('Location: thank-form.html');

?>
