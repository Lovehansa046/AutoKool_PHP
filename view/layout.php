<!DOCTYPE html>
<html lang="et">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEWSPORTAL</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
          integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style_main.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
</head>

<body>


<!-- Menu -->
<!--<nav class="one">-->
<!--    <ul class="topmenu">-->
<!--        <li><a href="#">Kategooriad<i class="fa fa-angle-down"></i></a>-->
<!--            <ul class="submenu">-->
<!--                --><?php
//                Controller::allCategory();
//                ?>
<!--            </ul>-->
<!--        </li>-->
<!--        <li><a href="testError">Info</a></li>-->
<!--        <li><a href="./">Stardileht</a></li>-->
<!--        <li><a href="registerForm">Registreeru</a></li>-->
<!--        <div class="pull-right">-->
<!--            <li>-->
<!--                <form action="search">-->
<!--                    <input type="text" name="otsi">-->
<!--                    <input type="submit" value="Otsi">-->
<!--                </form>-->
<!--            </li>-->
<!--        </div>-->
<!--    </ul>-->
<!--</nav>-->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">AutoKool</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Staff <span class="sr-only">(current)</span></a>
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
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
<!-- Content -->
<section>
    <div class="divBox">
        <?php
        if (isset($content)) {
            echo $content;
        } else {
            echo '<h1>Content is gone!</h1>';
        }
        ?>
    </div>
</section>

<!-- Footer -->
<hr>
<p style="display:block; text-align:center;">SPTV21 2024 a. &copy</p>

<!-- jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>

</body>

</html>