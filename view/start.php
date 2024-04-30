<?php
ob_start();

// Определение языка из localStorage
$lang = isset($_COOKIE['lang']) ? $_COOKIE['lang'] : 'est'; // По умолчанию используется 'est', если язык не установлен

ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autokooli "Edu tee"</title>
</head>
<body>
    <header class="bg-primary text-white py-5">
        <div class="container text-center">
            <h1 id="welcomeTitle" class="display-3 head-text"></h1>
            <p id="welcomeSubtitle" class="lead"></p>
        </div>
    </header>

    <section id="about" class="mb-5">
        <div class="container container-about">
            <div class="col-md-4 mb-4 text-center">
                <div class="card-body">
                    <div style="height: 150px; justify-content: center" class="card bg-warning">
                        <h2 id="aboutTitle" class="text-white mb-4"></h2>
                    </div>
                </div>
            </div>

            <p id="aboutText" class="text"></p>
        </div>
    </section>

    <section id="courses" class="text-center mb-5">
        <div class="row align-items-start justify-content-center">
            <?php Controller::categoryInfo(); ?>
        </div>
    </section>

    <script>
        // Функция для обновления текста на странице в соответствии с выбранным языком
        function updatePageText(lang) {
            if (lang === 'est') {
                document.getElementById('welcomeTitle').textContent = 'Tere tulemast autokooli "Edu tee"';
                document.getElementById('welcomeSubtitle').textContent = 'Õpetame teid kindlalt sõitma ja valmistame teid ette juhilubade saamiseks';
                document.getElementById('aboutTitle').textContent = 'Meie autokoolist';
                document.getElementById('aboutText').textContent = 'Autokool "Edu tee" pakub kvaliteetset sõiduõpet kogenud juhendajatega. Hoolitseme teie turvalisuse eest teel ja tagame täieliku ettevalmistuse juhilubade eksamiks.';
            } else if (lang === 'ru') {
                document.getElementById('welcomeTitle').textContent = 'Добро пожаловать в автошколу "Edu tee"';
                document.getElementById('welcomeSubtitle').textContent = 'Мы обучаем вас уверенно водить и подготовим вас к сдаче экзамена на права';
                document.getElementById('aboutTitle').textContent = 'О нашей автошколе';
                document.getElementById('aboutText').textContent = 'Автошкола "Edu tee" предлагает качественное обучение вождению с опытными инструкторами. Мы обеспечим вашу безопасность на дороге и гарантируем полную подготовку к сдаче экзаменов на водительское удостоверение.';
            }
            // Добавьте код для других элементов страницы, которые нуждаются в переводе
        }

        // Проверяем, сохранен ли язык в localStorage
        var savedLang = localStorage.getItem('lang');

        // Если язык сохранен, применяем его
        if (savedLang) {
            // Обновляем текст на странице в соответствии с сохраненным языком
            updatePageText(savedLang);
        }
    </script>
</body>
</html>

<?php
$content = ob_get_clean();

// Вывод содержимого с использованием макета
include_once 'view/layout.php';
?>
