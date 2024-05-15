<?php
ob_start();
<<<<<<< HEAD

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
=======
>>>>>>> c65e37a514936309e99c24d177af379eefb808f9
?>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding: 20px;
        }

        .profile-card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 50px;
            margin-bottom: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            margin-top: 60px;
            margin-bottom: 60px;
        }

        .profile-name {
            color: #007bff;
            font-size: 24px;
            margin-bottom: 10px;
            flex-basis: 100%;
        }

        .photo-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            flex-basis: 100%;
        }

        .photo-label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .photo-container img {
            width: 150px;
            height: 150px;
            margin-right: 20px;
            margin-bottom: 20px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .container {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin-top: 50px;
            margin-bottom: 50px;
        }
    </style>
<<<<<<< HEAD
    <div class="container" id="AutoJuht"></div>

<script>
    function changeLanguage(lang) {
        // Сохраняем выбранный язык в localStorage
        localStorage.setItem('lang', lang);
        // Перезагружаем страницу, чтобы применить выбранный язык
        location.reload();
    }

    // Обработчики событий для кнопок смены языка
    document.getElementById('langEst').addEventListener('click', function() {
        changeLanguage('est');
    });

    document.getElementById('langRu').addEventListener('click', function() {
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
            document.getElementById('AutoJuht').textContent = 'Meie Autojuht!'

        } else if (lang === 'ru') {
            document.getElementById('AutoJuht').textContent = 'Наши Инструктора!'


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
    document.getElementById('langEst').addEventListener('click', function() {
        updatePageText('est');
    });

    document.getElementById('langRu').addEventListener('click', function() {
        updatePageText('ru');
    });
</script>

<?php
Viewpersonal::viewPersonals($arr, $lang_active);
=======
    <div class="container"> Meie Autojuht!</div>


<?php
Viewpersonal::viewPersonals($arr);
>>>>>>> c65e37a514936309e99c24d177af379eefb808f9
$content = ob_get_clean();
include_once 'view/layout.php';


?>