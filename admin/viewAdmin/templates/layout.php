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
    <?php if (isset($_SESSION["userId"]) && isset($_SESSION["sessionId"])) : ?>

        <?php if (isset($_SESSION["status"]) && $_SESSION["status"] == "admin") : ?>
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container">
                    <!-- Logo -->
                    <a class="navbar-brand" href="../" target="_blank">VEEBILEHT</a>;

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
                                <a class="nav-link" href="categoryAdmin">Kategooriad</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="newsAdmin">Päring</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="PersonalAccount">Isiklik ala</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="logout">Logi välja <i class="fas fa-sign-out-alt"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

        <?php elseif (isset($_SESSION["status"]) && $_SESSION["status"] == "user") : ?>
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container">
                    <!-- Logo -->
                    <a class="navbar-brand" href="../" target="_blank">VEEBILEHT</a>;

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
                                <a class="nav-link" href="newsUser">Päring</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="PersonalAccount">Isiklik ala</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="logout">Logi välja <i class="fas fa-sign-out-alt"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        <?php endif; ?>

    <?php else : ?>
        <!-- Teade volitamata kasutajatele -->
        <div style="padding: 20px; background-color: #f8d7da; border: 1px solid #f5c6cb; color: #721c24; border-radius: 5px;">
            <h4 style="margin-top: 0;">Teil puuduvad õigused!</h4>
            <p>Vabandame, teil puuduvad selle lehe vaatamiseks või toimingu tegemiseks vajalikud õigused.</p>
            <p>Pöörduge administraatori poole või hankige vajalikud õigused jätkamiseks.</p>
        </div>
    <?php endif; ?>
</div>

<div id="content" style="padding-top:20px;">
    <?php echo $content; ?>
</div>
<!-- Bootstrapi JS-i lisamine (mõnede komponentide toimimiseks on vajalik) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.6.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>
