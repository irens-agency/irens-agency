<?php
    $header = "From: \"Резюме IRENS\" <irens.com.ua>\n";
    $header .= "Content-type: text/plain; charset=\"utf-8\"";
    mail("agency@irens.com.ua", "Резюме", "Имя Фамилия:\n$_POST[name]\n\nДолжность:\n$_POST[prof]\n\nОпыт работы:\n$_POST[experience]\n\nПрофессиональные навыки:\n$_POST[skills]\n\nУровень английского языка:\n$_POST[english]\n\nДополнительная ифнормация:\n$_POST[info]\n\nТелефон:$_POST[phone]\n\nSkype:$_POST[skype]", $header);
    header('Location: thanks.html');
?>
