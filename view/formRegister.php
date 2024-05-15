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
<div class="form-container">
    <h2 class="text-center mb-4">Registreeri</h2>
    <form class="form-horizontal" role="form" method="POST" action="registerAnswer">
        <div class="form-group">
            <label for="username">Kasutajanimi</label>
            <input id="name" type="text" class="form-control" name="name" value="" required autofocus>
        </div>
        <div class="form-group">
            <label for="email">E-post</label>
            <input id="email" type="email" class="form-control" name="email" value="" required>
        </div>
        <div class="form-group">
            <label for="password">Parool</label>
            <input id="password" type="password" class="form-control" name="password" required>
        </div>
        <div class="form-group">
            <label for="confirm_password">Kinnita parool</label>
            <input id="password-confirm" type="password" class="form-control" name="confirm" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block" name="save">Registreeri</button>
    </form>

    <div class="mt-4 text-center">
        <a href="./" class="btn btn-secondary btn-sm" role="button">Tagasi saidile</a>
    </div>

</div>

<!-- Lisame Bootstrap JS-i (vajalik teatud komponentide töötamiseks) -->
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.6.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>
