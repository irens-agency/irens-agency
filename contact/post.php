<?php 
    mail("irensagency@mail.ru", "Обратная связь", "Имя: $_POST[name] \nТелефон: $_POST[phone]");
    header('Location: thank-form.html');
?>