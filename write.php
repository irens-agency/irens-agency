<?php
    $header = "From: \"FROM MAN IRENS\" <irens.com.ua>\n";
    $header .= "Content-type: text/plain; charset=\"utf-8\"";
    mail("agency@irens.com.ua", "Message from man", "Имя: $_POST[name] \nСообщение: $_POST[message]", $header);
    header('Location: wrthanks.html');
?>
