<?php
// Функция для генерации случайного пароля
function generatePassword($length = 8) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $password = '';
    $charLength = strlen($characters);
    for ($i = 0; $i < $length; $i++) {
        $index = mt_rand(0, $charLength - 1);
        $password .= $characters[$index];
    }
    return $password;
}

// Генерация пароля длиной 10 символов
$randomPassword = generatePassword(10);
echo "Случайный пароль: $randomPassword";
?>
