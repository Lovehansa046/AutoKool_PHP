<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registreerimine</title>
    <!-- Lisame Bootstrap CSS-i -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
          integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <style>
        /* Kohandatud stiilid vormile */
        body {
            background-color: #f8f9fa;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-container {
            max-width: 400px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

<?php

function getCookieValue($name)
{
    return isset($_COOKIE[$name]) ? $_COOKIE[$name] : null;
}

// Извлекаем значение языка из Cookie
$lang_active = getCookieValue('lang');


// Если язык не найден в Cookie или не установлен, используем язык по умолчанию 'est'
if (!$lang_active) {
    $lang_active = 'est';
}

echo "
<div class='form-container'>
    <h2 id='reg__name' class='text-center mb-4'>" . ($lang_active === 'ru' ? 'Регистрация' : 'Registreeri') . "</h2>
    <form class='form-horizontal' role='form' method='POST' action='registerAnswer'>
        <div class='form-group'>
            <label id='username__name' for='username'>" . ($lang_active === 'ru' ? 'Имя пользователя' : 'Kasutajanimi') . "</label>
            <input id='name' type='text' class='form-control' name='name' value='' required autofocus>
        </div>
        <div class='form-group'>
            <label id='email__name' for='email'>" . ($lang_active === 'ru' ? 'Э-почта' : 'E-post') . "</label>
            <input id='email' type='email' class='form-control' name='email' value='' required>
        </div>
        <div class='form-group'>
            <label id='password__name' for='password'>" . ($lang_active === 'ru' ? 'Пароль' : 'Parool') . "</label>
            <input id='password' type='password' class='form-control' name='password' required>
        </div>
        <div class='form-group'>
            <label id='password__confirm__name' for='confirm_password'>" . ($lang_active === 'ru' ? 'Подтвердите пароль' : 'Kinnita parool') . "</label>
            <input id='password-confirm' type='password' class='form-control' name='confirm' required>
        </div>
        <button id='btn_reg__name' type='submit' class='btn btn-primary btn-block' name='save'>" . ($lang_active === 'ru' ? 'Зарегистрироваться ' : 'Registreeri') . "</button>
    </form>

    <div class='mt-4 text-center'>
        <a id='home__page__name' href='./' class='btn btn-secondary btn-sm' role='button'>" . ($lang_active === 'ru' ? 'Вернуться на главную страницу' : 'Tagasi saidile') . "</a>
    </div>
</div>
"

?>


<!-- Lisame Bootstrap JS-i (vajalik teatud komponentide töötamiseks) -->
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.6.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>
