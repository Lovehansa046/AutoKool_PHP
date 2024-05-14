<?php
if (isset($_SESSION['userId'])) {
    header('Location: login');
}
?>
<!DOCTYPE html>
<html lang="et">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admini juhtpaneel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
          integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card {
            width: 350px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
        }

        .card-title {
            font-size: 24px;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-control {
            border: 1px solid #ced4da;
            border-radius: 5px;
            padding: 12px;
            margin-bottom: 15px;
        }

        .btn-login {
            padding: 12px;
            border-radius: 5px;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            cursor: pointer;
        }

        .btn-login:hover {
            background-color: #0056b3;
        }

        .footer-text {
            text-align: center;
            margin-top: 15px;
        }
    </style>
</head>

<body>
<div class="card">
    <form class="form-signin" action="login" method="POST">
        <h3 style="text-align:center; padding: 20px" class="form-signin-heading">Autentimine</h3>
        <p>Email</p>
        <input type="text" name="email" class="form-control" placeholder="Email" autofocus>
        <!--nõutav-->
        <p>Parool</p>
        <input type="password" name="password" class="form-control" placeholder="Parool">
        <!--nõutav-->
        <button style="margin-top: 40px;" class="btn btn-lg btn-primary btn-block" type="submit" name="btnLogin">Logi sisse</button>

        <p style="padding-top:10px;">
            <?php
            if (isset($_SESSION['errorString'])) {
                echo $_SESSION['errorString'];
                unset($_SESSION['errorString']);
            }
            ?>
        </p>
        <p style="text-align: center; padding-top:10px;"><a href="../">Avaleht</a></p>
    </form>
</div> <!-- /container -->

</body>

</html>
