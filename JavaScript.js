<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Refresh Page</title>
</head>
<body>

    <!-- Ваш контент здесь -->

    <!-- Скрипт для автоматического обновления страницы -->
    <script>
        // Устанавливаем интервал обновления в миллисекундах (в данном случае, каждые 5000 миллисекунд или 5 секунд)
        var refreshInterval = 5000;

        function autoRefresh() {
            // Используем метод setTimeout для задержки обновления страницы на заданный интервал
            setTimeout(function () {
                // Используем метод location.reload() для обновления текущей страницы
                location.reload();
            }, refreshInterval);
        }

        // Вызываем функцию для первого запуска
        autoRefresh();
    </script>

</body>
</html>
