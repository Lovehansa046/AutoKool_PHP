<?php

class ViewPersonal
{
    public static function viewPersonal($arr)
    {
        foreach ($arr as $value) {
            echo " <div class='profile-card'>
    <h2 class='profile-name'  " . $value['staff_id'] . "> " . $value['staff_name'] . "</h2>
    <!--<h2 class='profile-category'  " . $value['staff_id'] . "> " . $value['staff_category'] . "</h2>-->

    <!-- Фото лицензии -->
    <div class='license-photo'>
        <p class='photo-label'>Фото лицензии:</p>
        <img src = 'data:image/jpeg;base64," . base64_encode($value['staf_license']) . "' width = 150 /><br > 
    </div>

    <!-- Собственное фото -->
    <div class='own-photo'>
        <p class='photo-label'>Собственное фото:</p>
        <img src = 'data:image/jpeg;base64," . base64_encode($value['staff_foto']) . "' width = 150 /><br > 
    </div>

    <!-- Фото автомобиля -->
    <div class='car-photo'>
        <p class='photo-label'>Фото автомобиля:</p>
        <img src = 'data:image/jpeg;base64," . base64_encode($value['staff_car']) . "' width = 150 /><br > 
    </div>
</div>
";
        }
    }
}
