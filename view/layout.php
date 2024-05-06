<!DOCTYPE html>
<html lang="et">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoKool</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
          integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!--    <link rel="stylesheet" type="text/css" href="style_main.css">-->
    <link rel="stylesheet" href="style_main.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
    <style>


        /* Стили для выпадающего списка выбора языка */
        /* Общие стили для формы и кнопок */
        .form-inline {
            display: flex;
            align-items: center;
        }

        .btn {
            margin-right: 10px; /* Отступ между кнопками */
        }

        /* Стили для кнопок выбора языка */
        #langRu, #langEst {
            font-size: 14px; /* Размер шрифта */
            padding: 8px 16px; /* Внутренние отступы */
        }

        /* Стили при наведении на кнопки */
        #langRu:hover, #langEst:hover {
            background-color: #0069d9; /* Цвет фона при наведении */
            color: #fff; /* Цвет текста при наведении */
        }


        body {
            font-family: 'Noto Serif', serif;
            line-height: 1.6;
            background-color: #f8f9fa;
            color: #333;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            padding-top: 60px;
            margin: 0; /* Убираем внешние отступы */
        }

        footer {
            margin-top: auto; /* Размещаем footer внизу, после всего контента */
            background-color: #007bff;
            color: #ffffff;
            text-align: center;
            padding: 20px 0;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a id="AutoKool" class="navbar-brand" href="./">AutoKool</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a id="Personal" class="nav-link" href="personal">Personal <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a id="Kategooriad" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                   aria-expanded="false">
                    Kategooriad
                </a>

                <div class='dropdown-menu'>
                    <?php
                    Controller::allCategory_CarSchool();
                    ?>
                </div>
            </li>
            <li class="nav-item">
                <a id="Reg" class="nav-link" href="registerForm">Registreeru</a>
            </li>
            <li class="nav-item">
                <a id="ISIK" class="nav-link" href="admin/index.php" style="display:block; text-align:center;">Isiklik
                    ala</a>
            </li>

        </ul>

        <!--        <div class="dropdown-menu">-->
        <!--            <a class='dropdown-item' href='category?id=" . $value['category_id'] . "'>" . $value['category_name_est'] . "</a>-->
        <!--            <a class='dropdown-item' href='category?id=" . $value['category_id'] . "'>" . $value['category_name_est'] . "</a>-->
        <!---->
        <!--            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="langRu">rus</button>-->
        <!--            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="langEst">est</button>-->
        <!--        </div>-->
        <form class="form-inline my-2 my-lg-0">
            <button class="btn btn-primary" type="submit" id="langRu">rus</button>
            <button class="btn btn-primary" type="submit" id="langEst">est</button>
        </form>

        <!--        <form class="form-inline my-2 my-lg-0">-->
        <!--            <select id="langSelect" class="custom-select" onchange="changeLanguage(this.value)">-->
        <!--                <option value="ru" id="langRu">rus</option>-->
        <!--                <option value="est" id="langEst">est</option>-->
        <!--            </select>-->
        <!--        </form>-->


        <!--            <form class="form-inline my-2 my-lg-0">-->
        <!--                <input class="form-control mr-sm-2" type="search" placeholder="Otsi" aria-label="Otsi">-->
        <!--                <button id="Otsi" class="btn btn-outline-success my-2 my-sm-0" type="submit">Otsi</button>-->
        <!--            </form>-->
    </div>
</nav>


<!--Content-->
<!--<section>-->
<!--    <div>-->
<?php
if (isset($content)) {
    echo $content;
} else {
    echo '<h1>Content is gone!</h1>';
}
?>


<!--    </div>-->
<!--</section>-->

<!--Content-->

<footer class="bg-primary text-white text-center py-4">
    <p id="footer">&copy; 2024 Autokool "Edu tee". Kõik õigused kaitstud.</p>
</footer>
<!-- JavaScript скрипт -->
<script>
    // Функция для изменения языка
    function changeLanguage(lang) {
        // Сохраняем выбранный язык в localStorage
        localStorage.setItem('lang', lang);
        // Перезагружаем страницу, чтобы применить выбранный язык
        location.reload();
    }

    // Обработчики событий для кнопок смены языка
    document.getElementById('langEst').addEventListener('click', function () {
        changeLanguage('est');
    });

    document.getElementById('langRu').addEventListener('click', function () {
        changeLanguage('ru');
    });

    // Проверяем, сохранен ли язык в localStorage
    var savedLang = localStorage.getItem('lang');

    // Если язык сохранен, применяем его
    if (savedLang) {
        // Установка соответствующего языка на странице
        if (savedLang === 'est') {
            document.documentElement.lang = 'et'; // Устанавливаем атрибут lang для HTML-элемента
        } else if (savedLang === 'ru') {
            document.documentElement.lang = 'ru'; // Устанавливаем атрибут lang для HTML-элемента
        }
    }

    function updatePageText(lang) {
        if (lang === 'est') {
            document.getElementById('footer').textContent = ' 2024 Autokool "Edu tee". Kõik õigused kaitstud.'
            document.getElementById('AutoKool').textContent = 'AutoKool'
            document.getElementById('Personal').textContent = 'Personal'
            document.getElementById('ISIK').textContent = 'Isiklik ala'
            document.getElementById('Reg').textContent = 'Registreeru'
            document.getElementById('Otsi').textContent = 'Otsi'
            document.getElementById('langEst').textContent = 'Est'
            document.getElementById('langRu').textContent = 'Rus'
            document.getElementById('Kategooriad').textContent = 'Kategooriad'

        } else if (lang === 'ru') {
            document.getElementById('footer').textContent = ' 2024 Автошкола «Edu tee». Все права защищены.'
            document.getElementById('AutoKool').textContent = 'Автошкола'
            document.getElementById('Personal').textContent = 'Персонал'
            document.getElementById('ISIK').textContent = 'Личный кабинет'
            document.getElementById('Reg').textContent = 'Регистрация'
            document.getElementById('Otsi').textContent = 'Искать'
            document.getElementById('langRu').textContent = 'Рус'
            document.getElementById('langEst').textContent = 'Эст'
            document.getElementById('Kategooriad').textContent = 'Категории'

        }

        // Сохраняем выбранный язык в localStorage
        localStorage.setItem('lang', lang);

        // Сохраняем выбранный язык также в Cookie
        document.cookie = `lang=${lang}; expires=Sun, 1 Jan 2025 00:00:00 UTC; path=/`;
    }

    // Функция для установки активного языка при загрузке страницы
    function setInitialLanguage() {
        var savedLang = localStorage.getItem('lang') || 'est'; // По умолчанию 'est', если язык не установлен

        // Обновляем текст на странице в соответствии с сохраненным языком
        updatePageText(savedLang);
    }

    // Вызываем функцию установки языка при загрузке страницы
    setInitialLanguage();

    // Обработчики событий для изменения языка
    document.getElementById('langEst').addEventListener('click', function () {
        updatePageText('est');
    });

    document.getElementById('langRu').addEventListener('click', function () {
        updatePageText('ru');
    });
</script>


<!-- jQuery and Bootstrap Bundle (includes Popper) -->

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>

</body>

</html>