<?php
$header = "From: \"Обратная связь IRENS\" <irens.com.ua>\n";
$header .= "Content-type: text/plain; charset=\"utf-8\"";
mail("irensagency@mail.ru", "Обратная связь", "Имя: $_POST[name] \nТелефон: $_POST[phone] \nСоциальные сети: $_POST[network]", $header);
    header('Location: thank-form.html');
?>
