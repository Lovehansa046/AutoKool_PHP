<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isiklik konto</title>
    <!-- Bootstrapi CSS-i lisamine -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
          integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href="public/css/bootstrap.css" rel="stylesheet">
    <link href="public/css/mystyle.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="public/css/font-awesome.min.css">
    <!-- SCRIPT -->
    <script src="public/js/jquery.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="public/js/ajaxupload.3.5.js"></script>
    <!-- Teie kohandatud stiilid -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding: 50px;
        }

        .profile-card {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .profile-card h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .profile-card .form-group {
            margin-bottom: 20px;
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 24px;
        }

        /* Stiilid navigeerimisribale */
        .navbar {
            background-color: #007bff; /* Taustavärv */
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .navbar-nav li {
            margin-left: 40px;
            margin-right: 40px;

        }

        .navbar-nav .nav-link {
            color: #ffffff; /* Lingi tekstivärv */
            font-weight: bold;
            transition: color 0.3s ease;
        }


        .navbar-nav .nav-link:hover {
            color: #f8f9fa; /* Lingi tekstivärv hiirega liikumisel */
        }
    </style>
</head>
<body>
<div class="container">
    <?php


    if (isset($_SESSION["userId"]) && isset($_SESSION["sessionId"])) : ?>

        <?php if (isset($_SESSION["status"]) && $_SESSION["status"] == "admin") : ?>

            <?php
            $lang_active = getCookieValue('lang');

            echo '
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container">
                    <!-- Logo -->
                    <a id="Veebileht__name" class="navbar-brand" href="../" target="_blank">' . ($lang_active === "ru" ? "Главная страница" : " VEEBILEHT") . '</a>;

                    <!-- Burger-nupp mobiilsetele seadmetele -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Navigeerimislinkide loend -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a id="category__name" class="nav-link" href="categoryAdmin">' . ($lang_active === "ru" ? "Категории" : " Kategooriad") . '</a>
                            </li>
                            <li class="nav-item">
                                <a id="Päring" class="nav-link" href="newsAdmin">' . ($lang_active === "ru" ? "Запросы" : " Päring") . '</a>
                            </li>
                            <li class="nav-item">
                                <a id="isiklik__ala" class="nav-link" href="PersonalAccount">' . ($lang_active === "ru" ? "Личный кабинет" : " Isiklik ala") . '</a>
                            </li>
                            <li class="nav-item">
                                <a id="exit" class="nav-link" href="logout">' . ($lang_active === "ru" ? "Выйти" : " Logi välja") . ' <i class="fas fa-sign-out-alt"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            ' ?>s

        <?php elseif (isset($_SESSION["status"]) && $_SESSION["status"] == "user") : ?>

            <?php

            $lang_active = getCookieValue('lang');

            echo '
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container">
                    <!-- Logo -->
                    <a id="Veebileht__name" class="navbar-brand" href="../" target="_blank">' . ($lang_active === "ru" ? "Главная страница" : " VEEBILEHT") . '</a>;

                    <!-- Burger-nupp mobiilsetele seadmetele -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Navigeerimislinkide loend -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a id="Päring" class="nav-link" href="newsUser">' . ($lang_active === "ru" ? "Запросы" : " Päring") . '</a>
                            </li>
                            <li class="nav-item">
                                <a id="isiklik__ala" class="nav-link" href="PersonalAccount">' . ($lang_active === "ru" ? "Личный кабинет" : " Isiklik ala") . '</a>
                            </li>
                            <li class="nav-item">
                                <a id="exit" class="nav-link" href="logout">' . ($lang_active === "ru" ? "Выйти " : " Logi välja") . ' <i class="fas fa-sign-out-alt"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            ' ?>
        <?php endif; ?>

    <?php else : ?>
        <?php
        $lang_active = getCookieValue('lang');

        echo '
        <!-- Teade volitamata kasutajatele -->
        <div style="padding: 20px; background-color: #f8d7da; border: 1px solid #f5c6cb; color: #721c24; border-radius: 5px;">
            <h4 style="margin-top: 0;">' . ($lang_active === "ru" ? "У Вас нет прав " : "Teil puuduvad õigused!") . '</h4>
            <p>' . ($lang_active === "ru" ? "К сожалению, у вас нет необходимых разрешений для просмотра этой страницы или выполнения действия." : "Vabandame, teil puuduvad selle lehe vaatamiseks või toimingu tegemiseks vajalikud õigused.") . '</p>
            <p>' . ($lang_active === "ru" ? "Свяжитесь со своим администратором или получите необходимые разрешения для продолжения." : "Pöörduge administraatori poole või hankige vajalikud õigused jätkamiseks.") . '</p>
        </div>
        '
        ?>
    <?php endif; ?>
</div>

<div id="content" style="padding-top:20px;">
    <?php echo $content; ?>
</div>

<!--<script>-->
<!--    // Функция для изменения языка-->
<!--    function changeLanguage(lang) {-->
<!--        // Сохраняем выбранный язык в localStorage-->
<!--        localStorage.setItem('lang', lang);-->
<!--        // Перезагружаем страницу, чтобы применить выбранный язык-->
<!--        location.reload();-->
<!--    }-->
<!---->
<!--    // Обработчики событий для кнопок смены языка-->
<!--    document.getElementById('langEst').addEventListener('click', function() {-->
<!--        changeLanguage('est');-->
<!--    });-->
<!---->
<!--    document.getElementById('langRu').addEventListener('click', function() {-->
<!--        changeLanguage('ru');-->
<!--    });-->
<!---->
<!--    // Проверяем, сохранен ли язык в localStorage-->
<!--    var savedLang = localStorage.getItem('lang');-->
<!---->
<!--    // Если язык сохранен, применяем его-->
<!--    if (savedLang) {-->
<!--        // Установка соответствующего языка на странице-->
<!--        if (savedLang === 'est') {-->
<!--            document.documentElement.lang = 'et'; // Устанавливаем атрибут lang для HTML-элемента-->
<!--        } else if (savedLang === 'ru') {-->
<!--            document.documentElement.lang = 'ru'; // Устанавливаем атрибут lang для HTML-элемента-->
<!--        }-->
<!--    }-->
<!---->
<!--    function updatePageText(lang) {-->
<!--        if (lang === 'est') {-->
<!--            document.getElementById('Veebileht__name').textContent = 'VEEBILEHT'-->
<!--            document.getElementById('Päring').textContent = 'Päring'-->
<!--            document.getElementById('isiklik__ala').textContent = 'Isiklik ala'-->
<!--            document.getElementById('exit').textContent = 'Logi välja'-->
<!--            document.getElementById('category__name').textContent = 'Kategooriad'-->
<!---->
<!---->
<!--        } else if (lang === 'ru') {-->
<!--            document.getElementById('Veebileht__name').textContent = 'Веб страница'-->
<!--            document.getElementById('Päring').textContent = 'Запросы'-->
<!--            document.getElementById('isiklik__ala').textContent = 'Личный кабинет'-->
<!--            document.getElementById('exit').textContent = 'Выход'-->
<!--            document.getElementById('category__name').textContent = 'Категории'-->
<!---->
<!---->
<!--        }-->
<!---->
<!--        // Сохраняем выбранный язык в localStorage-->
<!--        localStorage.setItem('lang', lang);-->
<!---->
<!--        // Сохраняем выбранный язык также в Cookie-->
<!--        document.cookie = `lang=${lang}; expires=Sun, 1 Jan 2025 00:00:00 UTC; path=/`;-->
<!--    }-->
<!---->
<!--    // Функция для установки активного языка при загрузке страницы-->
<!--    function setInitialLanguage() {-->
<!--        var savedLang = localStorage.getItem('lang') || 'est'; // По умолчанию 'est', если язык не установлен-->
<!---->
<!--        // Обновляем текст на странице в соответствии с сохраненным языком-->
<!--        updatePageText(savedLang);-->
<!--    }-->
<!---->
<!--    // Вызываем функцию установки языка при загрузке страницы-->
<!--    setInitialLanguage();-->
<!---->
<!--    // Обработчики событий для изменения языка-->
<!--    document.getElementById('langEst').addEventListener('click', function() {-->
<!--        updatePageText('est');-->
<!--    });-->
<!---->
<!--    document.getElementById('langRu').addEventListener('click', function() {-->
<!--        updatePageText('ru');-->
<!--    });-->
<!--</script>-->
<!-- Bootstrapi JS-i lisamine (mõnede komponentide toimimiseks on vajalik) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.6.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>
