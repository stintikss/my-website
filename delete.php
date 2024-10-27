<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Удалить данные</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <?php include 'header.html'; ?>
    <div class="form">
        <h2>Удалить все данные из Local Storage</h2>
        <button id="clear-button">Удалить все данные</button>
        <a href="login.php">Назад</a>
        <p id="message" style="color: green; font-weight: bolder; display: none;"></p>
    </div>

    <script>
        // Обработчик для кнопки удаления данных
        document.getElementById('clear-button').addEventListener('click', function() {
            // Подтверждение удаления
            const confirmation = confirm('Вы уверены, что хотите удалить все данные из Local Storage?');
            if (confirmation) {
                localStorage.clear(); // Удаление всех данных из Local Storage
                document.getElementById('message').innerText = 'Все данные успешно удалены.';
                document.getElementById('message').style.display = 'block'; // Показываем сообщение
            }
        });
    </script>
</body>
</html>
