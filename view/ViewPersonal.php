<?php



class ViewPersonal
{

    public static function viewPersonals($arr, $lang_active)

    {
        foreach ($arr as $value) {
            echo '<div class="profile-card">';
            echo '<h2 class="profile-name">' . $value['staff_name'] . '</h2>';
            // Uncomment the following line if staff_category is needed
            // echo '<h2 class="profile-category">' . $value['staff_category'] . '</h2>';

            // Фото лицензии
            echo '<div class="license-photo">';

            echo '<p id="foto__staff__license" class="photo-label">' . ($lang_active === "ru" ? 'Фото лицензии:' : 'Foto litsents:') . '</p>';
            echo '<img src="data:image/jpeg;base64,' . base64_encode($value['staf_license']) . '" width="150" /><br>';
            echo '</div>';

            // Собственное фото
            echo '<div class="own-photo">';
            echo '<p id="foto__staff" class="photo-label">' . ($lang_active === "ru" ? 'Собственное фото:' : 'Enda foto:') . '</p>';
            echo '<img src="data:image/jpeg;base64,' . base64_encode($value['staff_foto']) . '" width="150" /><br>';
            echo '</div>';

            // Фото автомобиля
            echo '<div class="car-photo">';
            echo '<p id="foto__staff__car" class="photo-label">' . ($lang_active === "ru" ? 'Фото автомобиля:' : 'Foto autost:') . '</p>';
            echo '<img src="data:image/jpeg;base64,' . base64_encode($value['staff_car']) . '" width="150" /><br>';
            echo '</div>';

            echo '</div>';
        }
    }

}
