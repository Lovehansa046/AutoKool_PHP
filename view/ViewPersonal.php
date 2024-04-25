<?php

class ViewPersonal
{
    public static function viewPersonal($arr)
    {
        foreach ($arr as $value) {
            echo " <div class='profile-card'>
    <h2 class='profile-name' >Иван Иванов</h2>

    <!-- Фото лицензии -->
    <div class='license-photo'>
        <p class='photo-label'>Фото лицензии:</p>
        <img src='path/to/license-photo.jpg' alt='Фото лицензии'>
    </div>

    <!-- Собственное фото -->
    <div class='own-photo'>
        <p class='photo-label'>Собственное фото:</p>
        <img src='path/to/own-photo.jpg' alt='Собственное фото'>
    </div>

    <!-- Фото автомобиля -->
    <div class='car-photo'>
        <p class='photo-label'>Фото автомобиля:</p>
        <img src='path/to/car-photo.jpg' alt='Фото автомобиля'>
    </div>
</div>
";
        }
    }
}
