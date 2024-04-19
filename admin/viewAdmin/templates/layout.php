

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
    <!-- Подключаем Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
          integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href="public/css/bootstrap.css" rel="stylesheet">
    <link href="public/css/mystyle.css" rel="stylesheet">
    <!--         Font Awesome -->
    <link rel="stylesheet" href="public/css/font-awesome.min.css">
    <!--         SCRIPT -->
    <script src="public/js/jquery.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="public/js/ajaxupload.3.5.js"></script>
    <!-- Ваши пользовательские стили -->
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

        /* Стили для навигационной панели */
        .navbar {
            background-color: #007bff; /* Цвет фона */
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .navbar-nav li {
            margin-left: 40px;
            margin-right: 40px;

        }

        .navbar-nav .nav-link {
            color: #ffffff; /* Цвет текста ссылок */
            font-weight: bold;
            transition: color 0.3s ease;
        }



        .navbar-nav .nav-link:hover {
            color: #f8f9fa; /* Цвет текста ссылок при наведении */
        }
    </style>
</head>
<body>
<div class="container">
    <?php if (isset($_SESSION["userId"]) && isset($_SESSION["sessionId"])) : ?>

        <?php if (isset($_SESSION["status"]) && $_SESSION["status"] == "admin") : ?>
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container">
                    <!-- Логотип -->
                    <a class="navbar-brand" href="../" target="_blank">WEB SITE</a>;

                    <!-- Кнопка "бургер" для мобильных устройств -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Список ссылок в навигационной панели -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="categoryAdmin">Categories</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="newsAdmin">News List</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="logout">Logout <i class="fas fa-sign-out-alt"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

        <?php else : ?>
            <h4>У вас нет прав!</h4>
        <?php endif; ?>

    <?php else : ?>
        <!-- Сообщение об ошибке для неавторизованных пользователей -->
        <div class="alert alert-danger text-center" role="alert">
            <strong>У вас нет прав доступа!</strong>
        </div>
    <?php endif; ?>
    <div class="profile-card">
        <h2>Личный кабинет</h2>
        <form>
            <div class="form-group">
                <label for="username">Имя пользователя</label>
                <input type="text" class="form-control" id="username" value="<?php echo htmlspecialchars($_SESSION["name"]); ?>" disabled>
            </div>
<!--            <div class="form-group">-->
<!--                <label for="email">Email</label>-->
<!--                <input type="email" class="form-control" id="email" value="--><?php //echo htmlspecialchars($_SESSION["e"]); ?><!--" disabled>-->
<!--            </div>-->
            <div class="form-group">
                <label for="password">Новый пароль</label>
                <input type="password" class="form-control" id="password" placeholder="Введите новый пароль">
            </div>
            <div class="form-group">
                <label for="confirm-password">Подтвердите пароль</label>
                <input type="password" class="form-control" id="confirm-password" placeholder="Повторите новый пароль">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Сохранить изменения</button>
        </form>
        <hr>
        <div class="text-center">
            <a href="#" class="text-danger">Удалить аккаунт</a>
        </div>
        <div class="text-center mt-3">
            <a href="logout" class="btn btn-outline-danger">Выйти <i class="fas fa-sign-out-alt"></i></a>
        </div>

    </div>
</div>

<!-- Подключаем Bootstrap JS (необходим для работы некоторых компонентов) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.6.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>