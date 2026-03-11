<?php
$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // хешируем пароль

$data = "Ник: $username, Email: $email, Пароль (хеш): $password\n";

file_put_contents('users.txt', $data, FILE_APPEND | LOCK_EX);

echo "Регистрация успешна! <a href='index.html'>Вернуться на главную</a>";
?>
