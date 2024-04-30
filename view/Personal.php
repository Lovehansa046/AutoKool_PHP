<?php
ob_start();
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
    <div class="container"> Meie Autojuht!</div>


<?php
Viewpersonal::viewPersonals($arr);
$content = ob_get_clean();
include_once 'view/layout.php';


?>