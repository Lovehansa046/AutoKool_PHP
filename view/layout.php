<!DOCTYPE html>
<html lang="et">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoKool</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!--    <link rel="stylesheet" type="text/css" href="style_main.css">-->
    <link rel="stylesheet" href="style_main.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
    <style>
        footer {
            background-color: #007bff;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            width: 100%;
            margin-top: auto;
            /* Поднимаем footer вниз до конца видимой области */
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="./">AutoKool</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="personal">Personal <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        Kategooriad
                    </a>

                    <div class='dropdown-menu'>
                        <?php
                        Controller::allCategory_CarSchool();
                        ?>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="registerForm">Registreeru</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin/index.php" style="display:block; text-align:center;">Isiklik ala</a>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="langRu">rus</button>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="langEst">est</button>
            </form>

            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Otsi" aria-label="Otsi">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Otsi</button>
            </form>
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
        <p>&copy; 2024 Autokool "Edu tee". Kõik õigused kaitstud.</p>
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
</script>

    <!-- jQuery and Bootstrap Bundle (includes Popper) -->

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>

</html>