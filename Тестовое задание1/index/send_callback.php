<?php
// Настройки почты
$to = "yan.yakimenko03@mail.ru"; // Укажите ваш email
$subject = "Запрос обратного звонка";

// Получение данных из формы
$name = htmlspecialchars($_POST['name']);
$phone = htmlspecialchars($_POST['phone']);

// Проверка на заполненность полей
if (empty($name) || empty($phone)) {
    echo "Пожалуйста, заполните все обязательные поля.";
    exit;
}

// Формирование сообщения
$message = "
Имя: $name
Телефон: $phone
";

// Заголовки письма
$headers = "From: no-reply@yourdomain.com\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Отправка письма
if (mail($to, $subject, $message, $headers)) {
    echo "Спасибо! Мы свяжемся с вами в ближайшее время.";
} else {
    echo "Ошибка: не удалось отправить запрос.";
}
?>
