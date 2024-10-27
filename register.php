<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <?php include 'header.html'; ?>
    <div class="form">
        <h2>Регистрация</h2>
        <input id="register-login" type="text" placeholder="Введите логин для регистрации">
        <input id="register-pass" type="password" placeholder="Введите пароль для регистрации">
        <button id="register-button">Зарегистрироваться</button>
        <p style="display: none; color: green; font-weight: bolder" id="good">Регистрация успешна</p>
    </div>

    <script>
        // Обработчик регистрации
        document.getElementById('register-button').addEventListener('click', function() {
            const login = document.getElementById('register-login').value;
            const password = document.getElementById('register-pass').value;

            // Проверка, заполнены ли поля
            if (login && password) {
                // Проверка, существует ли уже пользователь
                if (localStorage.getItem(login)) {
                    alert('Пользователь с таким логином уже существует.');
                } else {
                    // Сохраняем учетные данные в Local Storage
                    localStorage.setItem(login, password);
                    document.getElementById('good').style.display = 'block';

                    // Задержка перед перенаправлением на страницу входа
                    setTimeout(function() {
                        window.location.href = 'login.php'; // Переход на страницу входа
                        history.replaceState(null, null, 'login.php'); // Заменяем состояние истории
                    }, 1500);
                }
            } else {
                alert('Пожалуйста, заполните все поля.');
            }
        });
    </script>
</body>
</html>
