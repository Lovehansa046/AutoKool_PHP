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
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">AutoKool</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Personal <span class="sr-only">(current)</span></a>
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
            <input class="form-control mr-sm-2" type="search" placeholder="Otsi" aria-label="Otsi">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Otsi</button>
        </form>
    </div>
</nav>

<header class="bg-primary text-white py-5">
    <div class="container text-center">
        <h1 class="display-3 head-text">Tere tulemast autokooli "Edu tee"</h1>
        <p class="lead">Õpetame teid kindlalt sõitma ja valmistame teid ette juhilubade saamiseks</p>
    </div>
</header>

<main class="container py-5">
    <section id="about" class="mb-5">
        <div class="container container-about">
            <div class="col-md-4 mb-4 text-center">
                <div class="card-body">
                    <div style="height: 150px; justify-content: center" class="card bg-warning">
                        <h2 class="text-white mb-4">Meie autokoolist</h2>
                    </div>
                </div>
            </div>

            <p class="text">Autokool "Edu tee" pakub kvaliteetset sõiduõpet kogenud juhendajatega. Hoolitseme teie turvalisuse
                eest teel ja tagame täieliku ettevalmistuse juhilubade eksamiks.</p>
        </div>
    </section>

    <section id="courses" class="text-center mb-5">
        <div class="row align-items-start justify-content-center">
            <div class="col-md-4 mb-4">
                <div class="card category-card">
                    <div class="card-body">
                        <h3 class="card-title">Kategooria B </h3>
                        <h3 class="card-title">(sõiduauto)</h3>

                        <p class="card-text">Intensiivne kursus sõiduauto juhtimiseks, valmistudes teooria- ja praktilisele
                            eksamile.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card category-card">
                    <div class="card-body">
                        <h3 class="card-title">Kategooria C</h3>
                        <h3 class="card-title">(veoauto)</h3>
                        <p class="card-text">Õpe veoauto juhtimiseks koos kogenud juhendajatega, valmistudes kategooria C
                            eksami sooritamiseks.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card category-card">
                    <div class="card-body">
                        <h3 class="card-title">Kategooria D</h3>
                        <h3 class="card-title">(buss)</h3>
                        <p class="card-text">Täielik õppekursus bussi juhtimiseks, sealhulgas tehnikaga tutvumine ja
                            juhtimisoskuste omandamine.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="benefits" class="mb-5">
        <div class="container container-primary">
            <h2 class="text-primary mb-4">Õppimise eelised meie juures</h2>
            <ul class="list-group">
                <li class="list-group-item">Individuaalne lähenemine igale õpilasele</li>
                <li class="list-group-item">Kogenud ja sõbralikud juhendajad</li>
                <li class="list-group-item">Vastutulelik õppegraafik</li>
                <li class="list-group-item">Kaasaegsed autod ja varustus</li>
                <li class="list-group-item">Abi teooria- ja praktilise eksami ettevalmistamisel</li>
            </ul>
        </div>
    </section>

    <section id="contact" class="mb-5">
        <div class="container container-primary">
            <h2 class="text-primary mb-4 contact-info">Kontaktandmed</h2>
            <ul class="list-group">
                <li class="list-group-item">Aadress: Kesk tn 123, Tallinn</li>
                <li class="list-group-item">Telefon: +372 123 456-78-90</li>
                <li class="list-group-item">E-post: info@auto-kool.ee</li>
            </ul>
        </div>
    </section>
</main>

<footer class="bg-primary text-white text-center py-4">
    <p>&copy; 2024 Autokool "Edu tee". Kõik õigused kaitstud.</p>
</footer>

<!-- jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>

</body>

</html>
