<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form Processing</title>
</head>
<body>

<?php
// Обработка формы после отправки
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получение данных из формы
    $name = $_POST["name"];
    $email = $_POST["email"];

    // Валидация данных (простой пример)
    if (empty($name) || empty($email)) {
        echo "Please fill out all fields.";
    } else {
        // Вывод результатов
        echo "Hello, $name! Your email is $email.";
    }
}
?>

<!-- HTML форма -->
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>

    <button type="submit">Submit</button>
</form>

</body>
</html>
