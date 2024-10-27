<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <?php include 'header.html'; ?>
    <div class="delete">
        <a href="delete.php">Удалить</a>
    </div>
    <div class="form">
        <h2>Авторизация</h2>
        <input id="login" type="text" placeholder="Введите логин">
        <input id="pass" type="password" placeholder="Введите пароль">
        <button id="login-button">Войти</button>
        <p id="message"></p>
        <a id="reg-text" href="register.php">Зарегистрироваться</a>
    </div>

    <script>
        document.getElementById('login-button').addEventListener('click', function() {
            const login = document.getElementById('login').value;
            const password = document.getElementById('pass').value;

            // Извлекаем пароль пользователя из localStorage
            const storedPassword = localStorage.getItem(login);

            if (storedPassword) {
                if (storedPassword === password) {
                    document.getElementById('message').innerText = 'Авторизация успешна!';
                    
                    // Задержка перед переходом на домашнюю страницу
                    setTimeout(function() {
                        // Перенаправление на home.php
                        window.location.href = 'home.php';

                        // Удаляем страницу авторизации из истории браузера
                        history.replaceState(null, null, 'home.php'); // Замените на нужный URL, если необходимо
                    }, 1500);
                } else {
                    document.getElementById('message').innerText = 'Неверный пароль.';
                }
            } else {
                document.getElementById('message').innerText = 'Пользователь не найден.';
                document.getElementById('reg-text').style.display = 'block';
            }
        });
    </script>
</body>
</html>
