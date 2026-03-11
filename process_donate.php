<?php
$amount = $_POST['amount'];
$username = $_POST['username'];

$donation_data = "Донат: $amount руб. от $username\n";
file_put_contents('donations.txt', $donation_data, FILE_APPEND | LOCK_EX);

echo "Спасибо за поддержку! <a href='index.html'>Вернуться на главную</a>";
?>
